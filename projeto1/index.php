<?php include('./config.php') ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./assets/css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./assets/css/err404.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfólio web para captação de clientes">
    <meta name="keywords" content="web-developer, web, developer, design-sites, sites, institucionais, sites-institucionais, landpage,land-page">
    <meta name="author" content="Franklin Henrique">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo INCLUDE_PATH ?>./assets/image/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo INCLUDE_PATH ?>./assets/image/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo INCLUDE_PATH ?>./assets/image/favicon-16x16.png">
    <link rel="manifest" href="<?php echo INCLUDE_PATH ?>./site.webmanifest">
    <title>Franklin Henrique</title>
</head>

<body>
    <section class="header-mobile">
        <span class="menu_hamburguer e">&equiv;</span>
        <span class="menu_hamburguer x">&times;</span>
        <header class="mobile w100">
            <nav>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Home" class="marked">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#About">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Portfolio">Portfolio</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Contact">Contato</a></li>
                </ul>
            </nav>
        </header>
    </section>
    <!--header-mobile-->
    <section class="header-desktop">
        <header class="desktop w100">
            <nav>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Home" class="marked">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#About">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Portfolio">Portfolio</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Contact">Contato</a></li>
                </ul>
            </nav>
        </header>
        <!--desktop w100-->
    </section>
    <!--header-desktop-->

    <?php
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';

    if (file_exists("pages/$url.php")) {
        include("pages/$url.php");
    } else {
        include("pages/err404.php");
    };
    ?>

    <footer>
        <div class="form_social">
            <span><i class="fab fa-linkedin-in"></i></span>
            <span><i class="fab fa-github"></i></span>
            <span><i class="fab fa-youtube"></i></span>
        </div><!-- form_social -->
        <div class="copyright">
            <p>Franklin Henrique <span>&copy;2021</span></p>
        </div>
    </footer>



    <script src="<?php echo INCLUDE_PATH ?>./assets/js/script.js"></script>
</body>

</html>