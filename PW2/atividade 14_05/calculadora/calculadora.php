<?php

$resultado = "";

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $operador = $_POST['operador'];

    switch($operador){

        case "+":
            $resultado = $n1 + $n2;
            break;

        case "-":
            $resultado = $n1 - $n2;
            break;

        case "*":
            $resultado = $n1 * $n2;
            break;

        case "/":
            $resultado = $n1 / $n2;
            break;

        default:
            $resultado = "Operador inválido";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="calculadora.css">
</head>
<body>

<div class="container">

    <h1>Calculadora</h1>

    <form method="POST">

        <input type="number" step="0.01" name="n1" placeholder="Número 1">

        <input type="text" name="operador" placeholder="+ - * /">

        <input type="number" step="0.01" name="n2" placeholder="Número 2">

        <button type="submit">Calcular</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>