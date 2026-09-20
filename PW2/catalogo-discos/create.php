<?php
require_once 'config/db.php';
require_once 'config/funcoes.php';

$erros = [];
$dados = ['titulo' => '', 'artista' => '', 'ano_lancamento' => '', 'genero' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [
        'titulo' => $_POST['titulo'] ?? '',
        'artista' => $_POST['artista'] ?? '',
        'ano_lancamento' => $_POST['ano_lancamento'] ?? '',
        'genero' => $_POST['genero'] ?? '',
    ];

    $erros = validarDisco($dados);

    if (empty($erros)) {
        $stmt = $pdo->prepare(
            "INSERT INTO discos (titulo, artista, ano_lancamento, genero) VALUES (:titulo, :artista, :ano, :genero)"
        );
        $stmt->execute([
            ':titulo' => $dados['titulo'],
            ':artista' => $dados['artista'],
            ':ano' => $dados['ano_lancamento'],
            ':genero' => $dados['genero'],
        ]);

        header('Location: index.php?sucesso=criado');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Disco - Catálogo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="topo">
    <h1>🎵 Catálogo de Discos/Músicas</h1>
    <p>Cadastrar novo álbum ou música</p>
</header>

<div class="container">
    <div class="form-card">
        <h2>Novo Disco</h2>

        <?php if (!empty($erros)): ?>
            <div class="alerta alerta-erro">
                <strong>Corrija os erros abaixo:</strong>
                <ul>
                    <?php foreach ($erros as $erro): ?>
                        <li><?= htmlspecialchars($erro) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form id="form-disco" action="create.php" method="POST" novalidate>
            <div class="campo">
                <label for="titulo">Título do álbum/música</label>
                <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($dados['titulo']) ?>" maxlength="150">
                <span class="erro-campo" id="erro-titulo"></span>
            </div>

            <div class="campo">
                <label for="artista">Artista</label>
                <input type="text" id="artista" name="artista" value="<?= htmlspecialchars($dados['artista']) ?>" maxlength="150">
                <span class="erro-campo" id="erro-artista"></span>
            </div>

            <div class="campo">
                <label for="ano_lancamento">Ano de lançamento</label>
                <input type="number" id="ano_lancamento" name="ano_lancamento" value="<?= htmlspecialchars($dados['ano_lancamento']) ?>" min="1900" max="<?= date('Y') + 1 ?>">
                <span class="erro-campo" id="erro-ano_lancamento"></span>
            </div>

            <div class="campo">
                <label for="genero">Gênero</label>
                <input type="text" id="genero" name="genero" value="<?= htmlspecialchars($dados['genero']) ?>" maxlength="80" placeholder="Ex: Rock, Pop, MPB, Rap...">
                <span class="erro-campo" id="erro-genero"></span>
            </div>

            <div class="form-botoes">
                <button type="submit" class="btn">Salvar</button>
                <a href="index.php" class="btn btn-secundario">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
