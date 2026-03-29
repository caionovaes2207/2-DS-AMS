<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Contato"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- HEADER -->
<header>

<div class="topo-branco">
    <div class="container">

        <!-- LOGOS ESQUERDA -->
        <div class="logos">
            <img src="../img/etec zl.png" class="logo-etec">
            <img src="../img/centro paulo souza.jpg" class="logo-cps">
        </div>

        <!-- GOVERNO -->
        <div class="logo-governo">
            <div class="gov-box">
                <img src="../img/sp.png" alt="Governo SP">
                <div class="gov-texto">
                    <strong><?php echo "São Paulo"; ?></strong>
                    <span><?php echo "Governo do Estado"; ?></span>
                </div>
            </div>
        </div>

    </div>
</div>

<nav class="menu-vermelho">
    <ul>
        <li><a href="../home/index.php"><?php echo "Home"; ?></a></li>
        <li><a href="../cursos/cursos.php"><?php echo "Cursos"; ?></a></li>
        <li><a href="../contato/contado.php"><?php echo "Contato"; ?></a></li>
        <li><a href="../gestão/gestao.php"><?php echo "Gestão"; ?></a></li>
    </ul>
</nav>

</header>

<!-- CONTEÚDO -->
<section class="contato">

    <h1><?php echo "Entre em Contato"; ?></h1>
    <p><?php echo "Preencha o formulário abaixo para falar com a gente."; ?></p>

    <form action="processa.php" method="POST" class="formulario">

        <label><?php echo "Nome:"; ?></label>
        <input type="text" name="nome" required>

        <label><?php echo "Endereço:"; ?></label>
        <input type="text" name="endereco" required>

        <label><?php echo "Telefone:"; ?></label>
        <input type="text" name="telefone" required>

        <label><?php echo "E-mail:"; ?></label>
        <input type="email" name="email" required>

        <input type="submit" value="<?php echo "Enviar"; ?>" class="btn">

    </form>

</section>

<!-- RODAPÉ -->
<footer class="rodape">

    <div class="rodape-container">

        <div class="rodape-coluna">
            <img src="../img/Logo_CPS.png" alt="Logo CPS" class="logo-rodape">
        </div>

        <div class="rodape-coluna">
            <h2><?php echo "Redes Sociais"; ?></h2>
            <p><a href="#"><?php echo "Facebook"; ?></a></p>
            <p><a href="#"><?php echo "Instagram"; ?></a></p>
            <p><a href="#"><?php echo "LinkedIn"; ?></a></p>
        </div>

        <div class="rodape-coluna">
            <h2><?php echo "Horário da Secretaria"; ?></h2>
            <p><?php echo "Segunda a Sexta"; ?></p>
            <p><?php echo "08:00 às 17:00"; ?></p>
        </div>

        <div class="rodape-coluna">
            <h2><?php echo "Endereço"; ?></h2>
            <p><?php echo "Av. Águia de Haia, 2633"; ?></p>
            <p><?php echo "São Paulo - SP"; ?></p>
            <p><?php echo "CEP: 03694-000"; ?></p>
        </div>

        <div class="rodape-coluna">
            <h2><?php echo "Contato"; ?></h2>
            <p><?php echo "Email: contato@eteczonaleste.com"; ?></p>
            <p><?php echo "Telefone: (11) 1234-5678"; ?></p>
        </div>

    </div>

    <div class="rodape-bottom">
        <p><?php echo "©️ 2026 Etec Zona Leste | Todos os direitos reservados"; ?></p>
    </div>

</footer>

</body>
</html>
