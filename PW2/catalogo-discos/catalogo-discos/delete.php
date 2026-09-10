<?php
require_once 'config/db.php';

$id = $_GET['id'] ?? null;

if ($id && ctype_digit((string)$id)) {
    $stmt = $pdo->prepare("DELETE FROM discos WHERE id = :id");
    $stmt->execute([':id' => $id]);
}

header('Location: index.php?sucesso=excluido');
exit;
