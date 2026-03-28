<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato Enviado</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .mensagem-box {
            max-width: 600px;
            margin: 80px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        .mensagem-box h1 {
            color: #b20000;
            margin-bottom: 15px;
        }

        .mensagem-box p {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .mensagem-box a {
            display: inline-block;
            padding: 10px 20px;
            background: #b20000;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .mensagem-box a:hover {
            background: #8c0000;
        }
    </style>
</head>
<body>

<div class="mensagem-box">

    <h1>Mensagem enviada com sucesso!</h1>

    <p>
        <?php echo "Obrigado <strong>$nome</strong>, por entrar em contato."; ?>
    </p>

    <p>
        <?php echo "Enviaremos uma mensagem para seu e-mail: <strong>$email</strong>"; ?>
    </p>

    <a href="../home/index.php">Voltar para Home</a>

</div>

</body>
</html>
