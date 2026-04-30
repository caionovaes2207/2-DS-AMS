<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor = $_POST['txtvalor'];
    $horas = $_POST['txthoras'];
    $salario = $valor * $horas;
    echo "de acordo com as informações digitadas na pagina anterior, o salario e R$".$salario;
    ?>
</body>
</html>