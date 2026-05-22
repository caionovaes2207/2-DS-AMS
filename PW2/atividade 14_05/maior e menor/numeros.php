<?php

$resultado = "";

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $maior = max($n1, $n2, $n3);
    $menor = min($n1, $n2, $n3);

    $resultado = "Maior: $maior <br> Menor: $menor";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="numeros.css">
</head>
<body>

<div class="container">

    <h1>Maior e Menor</h1>

    <form method="POST">

        <input type="number" name="n1" placeholder="Número 1">

        <input type="number" name="n2" placeholder="Número 2">

        <input type="number" name="n3" placeholder="Número 3">

        <button type="submit">Verificar</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>