<?php

$resultado = "";

if(isset($_POST['inicio'])){

    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];

    $soma = 0;

    for($i = $inicio; $i <= $fim; $i++){

        if($i % 2 != 0){
            $soma += $i;
        }
    }

    $resultado = "Soma dos ímpares: " . $soma;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="impares.css">
</head>
<body>

<div class="container">

    <h1>Soma dos Ímpares</h1>

    <form method="POST">

        <input type="number" name="inicio" placeholder="Valor inicial">

        <input type="number" name="fim" placeholder="Valor final">

        <button type="submit">Somar</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>