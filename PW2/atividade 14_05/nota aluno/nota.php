<?php

$resultado = "";

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if($media >= 6){
        $resultado = "Aprovado";
    }
    elseif($media < 3){
        $resultado = "Retido";
    }
    else{
        $resultado = "Exame";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="nota.css">
</head>
<body>

<div class="container">

    <h1>Média Final</h1>

    <form method="POST">

        <input type="number" step="0.1" name="n1" placeholder="Nota 1">

        <input type="number" step="0.1" name="n2" placeholder="Nota 2">

        <input type="number" step="0.1" name="n3" placeholder="Nota 3">

        <input type="number" step="0.1" name="n4" placeholder="Nota 4">

        <button type="submit">Verificar</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>