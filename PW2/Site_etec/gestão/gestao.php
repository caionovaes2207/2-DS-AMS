<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Gestão - Etec Zona Leste"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="topo-branco">
        <div class="container">

            <div class="logos">
                <img src="../img/etec zl.png" class="logo-etec">
                <img src="../img/centro paulo souza.jpg" class="logo-cps">
            </div>

            <div class="logo-governo">
                <div class="gov-box">
                    <img src="../img/sp.png">
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
            <li><a href="../contato/contato.php"><?php echo "Contato"; ?></a></li>
            <li><a href="../gestão/gestao.php"><?php echo "Gestão"; ?></a></li>
        </ul>
    </nav>
</header>

<section class="gestao">
    <h1><?php echo "Direção"; ?></h1>

    <p>
        <?php echo "A direção é responsável pela administração geral da instituição, garantindo o bom funcionamento das atividades escolares, organização pedagógica e cumprimento das normas educacionais."; ?>
    </p>

    <p><strong><?php echo "Diretora:"; ?></strong> <?php echo "Amanda Bueno"; ?></p>
    <p><strong><?php echo "Assistente Técnico Administrativo:"; ?></strong> <?php echo "Patrick Moreno da Silva"; ?></p>
</section>

<section class="gestao">
    <h1><?php echo "Coordenação de Cursos"; ?></h1>

    <p>
        <?php echo "Os coordenadores são responsáveis por organizar, acompanhar e garantir a qualidade dos cursos, auxiliando professores e alunos durante o processo de ensino."; ?>
    </p>

    <h2><?php echo "Coordenadores Novotec"; ?></h2>

    <div class="cards-gestao">

        <div class="card-gestao">
            <h3><?php echo "Giovanna Littiere"; ?></h3>
            <p><?php echo "Novotec Administração"; ?></p>
        </div>

        <div class="card-gestao">
            <h3><?php echo "Leandro Pedroza de Nóbrega"; ?></h3>
            <p><?php echo "Novotec Logística"; ?></p>
        </div>

        <div class="card-gestao">
            <h3><?php echo "Marcelo Collado"; ?></h3>
            <p><?php echo "Novotec Desenvolvimento de Sistemas"; ?></p>
        </div>

        <div class="card-gestao">
            <h3><?php echo "Cibelle Ferreira Francoso"; ?></h3>
            <p><?php echo "Novotec RH"; ?></p>
        </div>

        <div class="card-gestao">
            <h3><?php echo "Jeferson Roberto de Lima"; ?></h3>
            <p><?php echo "Novotec Desenvolvimento de Sistemas AMS"; ?></p>
        </div>

        <div class="card-gestao">
            <h3><?php echo "Andreza Maria de Souza Rocha"; ?></h3>
            <p><?php echo "Novotec Recursos Humanos AMS"; ?></p>
        </div>

    </div>

    <h2><?php echo "Coordenadores Curso Técnico"; ?></h2>

    <div class="cards-gestao">

        <div class="card-gestao">
            <h3><?php echo "Wagner França"; ?></h3>
            <p><?php echo "Técnico em Desenvolvimento de Sistemas"; ?></p>
        </div>

        <div class="card-gestao">
            <h3><?php echo "Silvano Lack de Brito"; ?></h3>
            <p><?php echo "Técnico em Logística / Serviços Jurídicos"; ?></p>
        </div>

    </div>

</section>

<section class="gestao">
    <h1><?php echo "Secretaria Acadêmica"; ?></h1>

    <p>
        <?php echo "A secretaria acadêmica é responsável pelo atendimento aos alunos, organização de documentos, matrículas, históricos escolares e suporte administrativo geral da instituição."; ?>
    </p>

    <div class="secretaria">

        <div class="secretaria-coluna">
            <h3><?php echo "Coordenadores Novotec"; ?></h3>
            <ul>
                <li><?php echo "Giovanna Littiere (Administração)"; ?></li>
                <li><?php echo "Leandro Pedroza de Nóbrega (Logística)"; ?></li>
                <li><?php echo "Marcelo Collado (Desenvolvimento de Sistemas)"; ?></li>
                <li><?php echo "Cibelle Ferreira Francoso (RH)"; ?></li>
                <li><?php echo "Jeferson Roberto de Lima (DS AMS)"; ?></li>
                <li><?php echo "Andreza Maria de Souza Rocha (RH AMS)"; ?></li>
            </ul>
        </div>

        <div class="secretaria-coluna">
            <h3><?php echo "Coordenadores Curso Técnico"; ?></h3>
            <ul>
                <li><?php echo "Wagner França (Desenvolvimento de Sistemas)"; ?></li>
                <li><?php echo "Silvano Lack de Brito (Logística / Serviços Jurídicos)"; ?></li>
            </ul>
        </div>

    </div>

</section>

<footer class="rodape">

    <div class="rodape-container">

        <div class="rodape-coluna">
            <img src="../img/centro paulo souza.jpg" class="logo-rodape">
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
