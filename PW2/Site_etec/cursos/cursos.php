<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Cursos"; ?></title>
    <link rel="stylesheet" href="cursos.css">
</head>
<body>

<header>
    <div class="topo-branco">
        <div class="container">

            <div class="logos">
                <img src="../img/etec zl.png" class="logo-etec">
                <img src="../img/Logo_CPS.png" class="logo-cps">
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
            <li><a href="../contato/contado.php"><?php echo "Contato"; ?></a></li>
            <li><a href="../gestão/gestao.php"><?php echo "Gestão"; ?></a></li>
        </ul>
    </nav>
</header>

<section class="menu-cursos">
    <h1><?php echo "Nossos Cursos"; ?></h1>

    <div class="busca-cursos">
        <a href="#adm"><?php echo "Administração"; ?></a>
        <a href="#log"><?php echo "Logística"; ?></a>
        <a href="#ds"><?php echo "Desenvolvimento de Sistemas"; ?></a>
        <a href="#rh"><?php echo "Recursos Humanos"; ?></a>
        <a href="#fin"><?php echo "Finanças"; ?></a>
        <a href="#cont"><?php echo "Contabilidade"; ?></a>
        <a href="#jur"><?php echo "Serviços Jurídicos"; ?></a>
    </div>
</section>

<!-- ADMINISTRAÇÃO -->
<section id="adm" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Administração"; ?></h1>

        <p><?php echo "O curso técnico de Administração, na modalidade AMS, oferece uma visão abrangente e fundamentada sobre o funcionamento das organizações, abordando desde empresas privadas até ONGs, órgãos públicos, comércio e indústria."; ?></p>

        <p><?php echo "Durante a formação, o aluno desenvolve conhecimentos em planejamento estratégico, gestão de pessoas, controle financeiro, marketing e processos organizacionais."; ?></p>

        <p><?php echo "Além disso, o curso estimula habilidades como liderança, trabalho em equipe e tomada de decisões."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1200 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>3 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p>Técnico Presencial</p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p>Gestão e Negócios</p></div>
    </div>
</section>

<!-- LOGÍSTICA -->
<section id="log" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Logística"; ?></h1>

        <p><?php echo "Os estudantes aprendem sobre movimentação de estoque, transporte e cadeia de suprimentos."; ?></p>

        <p><?php echo "O curso desenvolve habilidades para planejamento logístico e redução de custos."; ?></p>

        <p><?php echo "Profissional essencial para eficiência empresarial."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1200 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>3 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p>Técnico</p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p>Gestão e Negócios</p></div>
    </div>
</section>

<section id="ds" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Desenvolvimento de Sistemas"; ?></h1>

        <p><?php echo "É o profissional que analisa e projeta sistemas, constrói, testa e mantém sistemas de informação."; ?></p>

        <p><?php echo "O profissional pode atuar na área de tecnologia, desenvolvendo soluções inovadoras."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1500 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>4 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p><?php echo "Técnico"; ?></p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p><?php echo "Tecnologia da Informação"; ?></p></div>
    </div>
</section>

<section id="rh" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Recursos Humanos"; ?></h1>

        <p><?php echo "O curso prepara o aluno para atuar na gestão de pessoas dentro das organizações."; ?></p>

        <p><?php echo "O profissional contribui para o crescimento das empresas através da valorização do capital humano."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1000 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>2 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p><?php echo "Técnico"; ?></p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p><?php echo "Gestão"; ?></p></div>
    </div>
</section>

<section id="fin" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Finanças"; ?></h1>

        <p><?php echo "O curso forma profissionais para atuar no controle e planejamento financeiro."; ?></p>

        <p><?php echo "Essencial para a saúde financeira das organizações."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1000 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>2 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p><?php echo "Técnico"; ?></p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p><?php echo "Gestão"; ?></p></div>
    </div>
</section>

<section id="cont" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Contabilidade"; ?></h1>

        <p><?php echo "O curso desenvolve conhecimentos sobre balanços, impostos e controle patrimonial."; ?></p>

        <p><?php echo "O profissional pode atuar em empresas e escritórios contábeis."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1200 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>3 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p><?php echo "Técnico"; ?></p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p><?php echo "Gestão"; ?></p></div>
    </div>
</section>

<section id="jur" class="curso-detalhe">
    <div class="curso-texto">
        <h1><?php echo "Serviços Jurídicos"; ?></h1>

        <p><?php echo "O curso aborda leis, documentos legais e processos jurídicos."; ?></p>

        <p><?php echo "O profissional pode atuar em escritórios e órgãos públicos."; ?></p>
    </div>

    <div class="info-curso">
        <div class="info-box"><h3><?php echo "Carga Horária"; ?></h3><p>1200 horas</p></div>
        <div class="info-box"><h3><?php echo "Duração"; ?></h3><p>3 semestres</p></div>
        <div class="info-box"><h3><?php echo "Tipo"; ?></h3><p><?php echo "Técnico"; ?></p></div>
        <div class="info-box"><h3><?php echo "Eixo"; ?></h3><p><?php echo "Gestão"; ?></p></div>
    </div>
</section>

<footer class="rodape">
    <div class="rodape-container">

        <div class="rodape-coluna">
            <img src="../img/Logo_CPS.png" class="logo-rodape">
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
