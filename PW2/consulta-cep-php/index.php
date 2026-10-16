<?php

declare(strict_types=1);

const API_BASE = 'https://viacep.com.br/ws';


function e(?string $texto): string
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}

function consultarCep(string $cep): array
{
    $url = API_BASE . '/' . $cep . '/json/';

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_HTTPHEADER     => ['Accept: application/json'],
    ]);
    $corpo  = curl_exec($ch);
    $falha  = curl_error($ch);
    $codigo = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($corpo === false) {
        return ['dados' => null, 'erro' => $falha ?: 'Falha de conexão com a API.'];
    }
    if ($codigo === 400) {                       
        return ['dados' => null, 'erro' => null];
    }
    if ($codigo !== 200) {
        return ['dados' => null, 'erro' => "A API respondeu com o código HTTP $codigo."];
    }

    $dados = json_decode($corpo, true);          
    if (!is_array($dados)) {
        return ['dados' => null, 'erro' => 'A API devolveu uma resposta inválida.'];
    }
    if (!empty($dados['erro'])) {                
        return ['dados' => null, 'erro' => null];
    }

    return ['dados' => $dados, 'erro' => null];
}

$cepDigitado = trim($_GET['cep'] ?? '');
$cepNumeros  = preg_replace('/\D/', '', $cepDigitado);   
$resultado   = null;
$aviso       = null;

if (isset($_GET['cep'])) {
    if (strlen($cepNumeros) !== 8) {
        $aviso = 'O CEP deve ter 8 números. Exemplo: 01001-000.';
    } else {
        $resultado = consultarCep($cepNumeros);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de CEP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,800&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<main class="pagina">

    <header class="topo">
        <h1>Consulta de CEP</h1>
        <p>Informe um CEP e descubra o endereço completo: rua, bairro, cidade e estado.</p>
    </header>

    <form class="busca" method="get" action="index.php" role="search">
        <label for="cep">CEP</label>
        <div class="busca__linha">
            <input type="text" id="cep" name="cep" value="<?= e($cepDigitado) ?>"
                   inputmode="numeric" maxlength="9" pattern="[0-9]{5}-?[0-9]{3}"
                   title="Digite 8 números, com ou sem hífen"
                   placeholder="Ex.: 01001-000" autocomplete="off" required autofocus>
            <button type="submit">Consultar</button>
        </div>
    </form>

    <section class="resultados" aria-live="polite">
        <?php if ($aviso): ?>
            <p class="mensagem mensagem--aviso"><?= e($aviso) ?></p>

        <?php elseif ($resultado && $resultado['erro']): ?>
            <p class="mensagem mensagem--erro">
                Não foi possível consultar a API: <?= e($resultado['erro']) ?> Tente novamente em instantes.
            </p>

        <?php elseif ($resultado && !$resultado['dados']): ?>
            <p class="mensagem">CEP <?= e($cepDigitado) ?> não encontrado. Confira os números e tente novamente.</p>

        <?php elseif ($resultado): ?>
            <?php
            $d = $resultado['dados'];
            $estado = ($d['uf'] ?? '') !== ''
                ? $d['uf'] . (($d['estado'] ?? '') !== '' ? ' — ' . $d['estado'] : '')
                : '';
            $campos = [
                'CEP'         => $d['cep'] ?? '',
                'Logradouro'  => $d['logradouro'] ?? '',
                'Complemento' => $d['complemento'] ?? '',
                'Bairro'      => $d['bairro'] ?? '',
                'Cidade'      => $d['localidade'] ?? '',
                'Estado'      => $estado,
                'Região'      => $d['regiao'] ?? '',
                'DDD'         => $d['ddd'] ?? '',
                'Código IBGE' => $d['ibge'] ?? '',
            ];
            $resumo = array_filter([$d['bairro'] ?? '', $d['localidade'] ?? '', $d['uf'] ?? '']);
            ?>
            <article class="endereco">
                <h2><?= e($d['logradouro'] ?: 'Endereço sem logradouro') ?></h2>
                <p class="endereco__cidade"><?= e(implode(' · ', $resumo)) ?></p>

                <dl class="dados">
                    <?php foreach ($campos as $nome => $valor): ?>
                        <div><dt><?= e($nome) ?></dt><dd><?= e($valor !== '' ? $valor : '—') ?></dd></div>
                    <?php endforeach; ?>
                </dl>
            </article>

        <?php else: ?>
            <p class="mensagem mensagem--vazio">O endereço aparece aqui. Digite um CEP com 8 números e toque em Consultar.</p>
        <?php endif; ?>
    </section>

    <footer class="rodape">
        Dados da <a href="https://viacep.com.br" target="_blank" rel="noopener">API ViaCEP</a>
    </footer>
</main>
</body>
</html>
