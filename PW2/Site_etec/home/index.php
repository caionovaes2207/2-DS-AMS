<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Etec Zona Leste"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!--header-->
<header>

    <div class="topo-branco">
        <div class="container">

           
            <div class="logos">
                <img src="../img/etec zl.png" class="logo-etec">
                <img src="../img/centro paulo souza.jpg" class="logo-cps">
            </div>

            
            <div class="logo-governo">
                <div class="gov-box">
                    <img src="../img/governo-sp.png" alt="Governo SP">
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

<!--banner-->
<section class="banner">
    <div class="banner-conteudo">
        <h1><?php echo "Bem-vindo ao site da Etec Zona Leste"; ?></h1>
        <p><?php echo "Diversos cursos para várias áreas do conhecimento"; ?></p>

        <div class="botoes">
            <a href="cursos.php" class="btn"><?php echo "Ver Cursos"; ?></a>
            <a href="gestao.php" class="btn"><?php echo "Conhecer Gestão"; ?></a>
        </div>
    </div>
</section>

<!--conquistas-->
<h1 style="text-align:center;"><?php echo "Conquistas"; ?></h1>

<section class="conquistas">
    <div class="item">
        <h1>+20</h1>
        <p><?php echo "Cursos Técnicos"; ?></p>
    </div>

    <div class="item">
        <h1>+1500</h1>
        <p><?php echo "Alunos Ativos"; ?></p>
    </div>

    <div class="item">
        <h1>30</h1>
        <p><?php echo "Anos de História"; ?></p>
    </div>
</section>

<!--vantagens-->
<section class="vantagens">

    <h1><?php echo "Por que estudar na Etec Zona Leste?"; ?></h1>

    <div class="cards">

        <div class="card">
            <h2><?php echo "Ensino de Qualidade"; ?></h2>
            <p><?php echo "Professores qualificados e ensino reconhecido em todo o estado."; ?></p>
        </div>

        <div class="card">
            <h2><?php echo "Infraestrutura Moderna"; ?></h2>
            <p><?php echo "Laboratórios equipados e ambientes preparados para o aprendizado."; ?></p>
        </div>

        <div class="card">
            <h2><?php echo "Ensino Gratuito"; ?></h2>
            <p><?php echo "Educação pública de excelência sem custo para o aluno."; ?></p>
        </div>

        <div class="card">
            <h2><?php echo "Preparação Profissional"; ?></h2>
            <p><?php echo "Foco no mercado de trabalho e desenvolvimento de habilidades práticas."; ?></p>
        </div>

        <div class="card">
            <h2><?php echo "Alta Empregabilidade"; ?></h2>
            <p><?php echo "Alunos preparados para conquistar vagas em diversas áreas."; ?></p>
        </div>

        <div class="card">
            <h2><?php echo "Ambiente Colaborativo"; ?></h2>
            <p><?php echo "Espaço que incentiva trabalho em equipe e inovação."; ?></p>
        </div>

    </div>

</section>

<!--rodapé-->
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
