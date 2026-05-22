<?php

$resultado = "";

if(isset($_POST['salario'])){

    $salario = $_POST['salario'];

    $gratificacao = $salario * 0.10;
    $imposto = $salario * 0.20;

    $liquido = $salario + $gratificacao - $imposto;

    $resultado = "Salário líquido: R$ " . $liquido;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="salario.css">
</head>
<body>

<div class="container">

    <h1>Salário Líquido</h1>

    <form method="POST">

        <input type="number" step="0.01" name="salario" placeholder="Digite o salário">

        <button type="submit">Calcular</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>