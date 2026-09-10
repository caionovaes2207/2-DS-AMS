<?php
/**
 * Conexão com o banco de dados usando PDO
 * Ajuste as credenciais conforme o seu ambiente (XAMPP, WAMP, Docker, etc.)
 */

$host = 'localhost';
$dbname = 'catalogo_discos';
$user = 'root';
$senha = ''; // altere se o seu MySQL tiver senha configurada
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
