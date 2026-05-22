<?php

$resultado = "";

if(isset($_POST['preco'])){

    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];

    $valorFinal = $preco - ($preco * $desconto / 100);

    $resultado = "Valor final: R$ " . $valorFinal;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="desconto.css">
</head>
<body>

<div class="container">

    <h1>Desconto</h1>

    <form method="POST">

        <input type="number" step="0.01" name="preco" placeholder="Preço">

        <input type="number" step="0.01" name="desconto" placeholder="Desconto %">

        <button type="submit">Calcular</button>

    </form>

    <div class="resultado">
        <?php echo $resultado; ?>
    </div>

</div>

</body>
</html>