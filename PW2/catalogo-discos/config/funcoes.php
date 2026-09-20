<?php
/**
 * Funções auxiliares do sistema
 */

function limpar($valor) {
    return htmlspecialchars(trim($valor ?? ''), ENT_QUOTES, 'UTF-8');
}

function validarDisco($dados) {
    $erros = [];

    if (empty($dados['titulo'])) {
        $erros[] = 'O título do álbum/música é obrigatório.';
    } elseif (mb_strlen($dados['titulo']) > 150) {
        $erros[] = 'O título deve ter no máximo 150 caracteres.';
    }

    if (empty($dados['artista'])) {
        $erros[] = 'O nome do artista é obrigatório.';
    } elseif (mb_strlen($dados['artista']) > 150) {
        $erros[] = 'O nome do artista deve ter no máximo 150 caracteres.';
    }

    $anoAtual = (int) date('Y');
    if (empty($dados['ano_lancamento'])) {
        $erros[] = 'O ano de lançamento é obrigatório.';
    } elseif (!is_numeric($dados['ano_lancamento']) || $dados['ano_lancamento'] < 1900 || $dados['ano_lancamento'] > ($anoAtual + 1)) {
        $erros[] = "O ano de lançamento deve estar entre 1900 e " . ($anoAtual + 1) . ".";
    }

    if (empty($dados['genero'])) {
        $erros[] = 'O gênero musical é obrigatório.';
    } elseif (mb_strlen($dados['genero']) > 80) {
        $erros[] = 'O gênero deve ter no máximo 80 caracteres.';
    }

    return $erros;
}
