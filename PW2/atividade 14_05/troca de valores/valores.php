<?php

$resultado = "";

if(isset($_POST['a'])){

    $a = $_POST['a'];
    $b = $_POST['b'];

    $temp = $a;
    $a = $b;
    $b = $temp;

    $resultado = "A = $a <br> B = $b";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="valores.css">
</head>
<body>

<div class="container">

    <h1>Troca de Valores</h1>

    <form method="POST">

        <input type="number" name="a" placeholder="Valor A">

        <input type="number" name="b" placeholder="Valor B">

        <button type="submit">Trocar</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>