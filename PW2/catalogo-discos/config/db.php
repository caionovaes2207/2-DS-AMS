<?php
/**
 * Conexão com o banco de dados 
 */

function carregarEnv($caminho) {
    if (!file_exists($caminho)) {
        die('Arquivo .env não encontrado. Copie o .env.example para .env e preencha suas credenciais.');
    }

    $linhas = file($caminho, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($linhas as $linha) {
        if (strpos(trim($linha), '#') === 0) continue; 
        if (strpos($linha, '=') === false) continue;

        [$chave, $valor] = explode('=', $linha, 2);
        $chave = trim($chave);
        $valor = trim($valor);

        if (!array_key_exists($chave, $_ENV)) {
            $_ENV[$chave] = $valor;
            putenv("$chave=$valor");
        }
    }
}

carregarEnv(__DIR__ . '/../.env');

$host    = getenv('DB_HOST');
$dbname  = getenv('DB_NAME');
$user    = getenv('DB_USER');
$senha   = getenv('DB_PASS');
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $senha, $options);
} catch (PDOException $e) {
    die('Erro na conexão com o banco de dados: ' . $e->getMessage());
}
