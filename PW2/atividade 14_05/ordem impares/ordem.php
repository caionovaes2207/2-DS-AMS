<?php

$resultado = "";

if(isset($_POST['n1'])){

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    $maior = max($n1, $n2);
    $menor = min($n1, $n2);

    for($i = $maior; $i >= $menor; $i--){

        if($i % 2 != 0){
            $resultado .= $i . "<br>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 12</title>
    <link rel="stylesheet" href="ordem.css">
</head>
<body>

<div class="container">

    <h1>Ímpares Decrescentes</h1>

    <form method="POST">

        <input type="number" name="n1" placeholder="Primeiro número">

        <input type="number" name="n2" placeholder="Segundo número">

        <button type="submit">Mostrar</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>