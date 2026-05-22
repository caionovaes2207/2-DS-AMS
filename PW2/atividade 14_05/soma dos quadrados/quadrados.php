<?php

$resultado = "";

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $soma = ($n1 * $n1) + ($n2 * $n2) + ($n3 * $n3);

    $resultado = "Soma dos quadrados: " . $soma;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="quadrados.css">
</head>
<body>

<div class="container">

    <h1>Soma dos Quadrados</h1>

    <form method="POST">

        <input type="number" name="n1" placeholder="Número 1">

        <input type="number" name="n2" placeholder="Número 2">

        <input type="number" name="n3" placeholder="Número 3">

        <button type="submit">Calcular</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>