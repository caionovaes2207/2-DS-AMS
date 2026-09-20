<?php
require_once 'config/db.php';

$stmt = $pdo->query("SELECT * FROM discos ORDER BY id DESC");
$discos = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Discos/Músicas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="topo">
    <h1>🎵 Catálogo de Discos/Músicas</h1>
    <p>Gestão de álbuns, artistas, ano de lançamento e gênero</p>
</header>

<div class="container">

    <?php if (isset($_GET['sucesso'])): ?>
        <div class="alerta alerta-sucesso">
            <?php
            $msgs = [
                'criado' => 'Disco cadastrado com sucesso!',
                'editado' => 'Disco atualizado com sucesso!',
                'excluido' => 'Disco excluído com sucesso!',
            ];
            echo $msgs[$_GET['sucesso']] ?? 'Operação realizada com sucesso!';
            ?>
        </div>
    <?php endif; ?>

    <div class="barra-acoes">
        <input type="text" id="campo-busca" placeholder="🔍 Buscar por título, artista ou gênero...">
        <a href="create.php" class="btn">+ Novo Disco</a>
    </div>

    <div class="tabela-wrapper">
        <table id="tabela-discos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Artista</th>
                    <th>Ano</th>
                    <th>Gênero</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($discos) === 0): ?>
                    <tr>
                        <td colspan="6" class="vazio">Nenhum disco cadastrado ainda. Clique em "Novo Disco" para começar.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($discos as $disco): ?>
                        <tr>
                            <td>#<?= (int)$disco['id'] ?></td>
                            <td><?= htmlspecialchars($disco['titulo']) ?></td>
                            <td><?= htmlspecialchars($disco['artista']) ?></td>
                            <td><?= htmlspecialchars($disco['ano_lancamento']) ?></td>
                            <td><span class="badge-genero"><?= htmlspecialchars($disco['genero']) ?></span></td>
                            <td class="acoes-linha">
                                <a href="edit.php?id=<?= (int)$disco['id'] ?>" class="btn btn-editar btn-sm">Editar</a>
                                <a href="#"
                                   class="btn btn-excluir btn-sm"
                                   data-id="<?= (int)$disco['id'] ?>"
                                   data-titulo="<?= htmlspecialchars($disco['titulo']) ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <p id="msg-vazio-busca" class="vazio" style="display:none;">Nenhum resultado encontrado para a busca.</p>
    </div>
</div>

<!-- Modal de confirmação de exclusão -->
<div class="modal-fundo" id="modal-confirmar">
    <div class="modal-caixa">
        <h3>Confirmar exclusão</h3>
        <p>Tem certeza que deseja excluir "<strong id="modal-titulo-item"></strong>"? Esta ação não pode ser desfeita.</p>
        <div class="modal-botoes">
            <button id="btn-cancelar-modal" class="btn btn-secundario">Cancelar</button>
            <a href="#" id="link-confirmar-exclusao" class="btn btn-excluir">Sim, excluir</a>
        </div>
    </div>
</div>

<script src="js/script.js"></script>
</body>
</html>
