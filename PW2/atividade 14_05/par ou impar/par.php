<?php

$resultado = "";

if(isset($_POST['numero'])){

    $numero = $_POST['numero'];

    if($numero % 2 == 0){
        $resultado = "Par";
    }else{
        $resultado = "Ímpar";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="par.css">
</head>
<body>

<div class="container">

    <h1>Par ou Ímpar</h1>

    <form method="POST">

        <input type="number" name="numero" placeholder="Digite um número">

        <button type="submit">Verificar</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>