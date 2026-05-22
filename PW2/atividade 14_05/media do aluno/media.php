<?php

$resultado = "";

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];

    $media = ($n1 + $n2 + $n3 + $n4) / 4;

    if($media >= 5){
        $resultado = "Aprovado";
    }else{
        $resultado = "Reprovado";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="media.css">
</head>
<body>

<div class="container">

    <h1>Média do Aluno</h1>

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