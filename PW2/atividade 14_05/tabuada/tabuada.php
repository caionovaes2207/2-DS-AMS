<?php

$resultado = "";

if(isset($_POST['numero'])){

    $numero = $_POST['numero'];

    for($i = 1; $i <= 10; $i++){
        $resultado .= "$numero x $i = " . ($numero * $i) . "<br>";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>

    <link rel="stylesheet" href="tabuada.css">

</head>
<body>

<div class="container">

    <h1>Tabuada</h1>

    <form method="POST">

        <input type="number" name="numero" placeholder="Digite um número">

        <button type="submit">Calcular</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>