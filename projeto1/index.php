<?php include('./config.php') ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./assets/css/style.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./assets/css/err404.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./assets/css/carousel.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>./node_modules/owl.carousel/dist/assets/owl.theme.default.min.css" />
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
    <div class="overlay_loading">
        <img src="<?php echo INCLUDE_PATH ?>./assets/image/loader.gif" alt="enviando os emails">
    </div>
    <section class="header-mobile">
        <span class="menu_hamburguer e">&equiv;</span>
        <span class="menu_hamburguer x">&times;</span>
        <header class="mobile w100">
            <nav>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Home" class="marked">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#About">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH ?>#Portfolio">Portfólio</a></li>
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
                    <li><a href="<?php echo INCLUDE_PATH ?>#Portfolio">Portfólio</a></li>
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


    <script src="<?php echo INCLUDE_PATH ?>./assets/js/script.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>./node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>./assets/js/carousel.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>./assets/js/menuChangeOnScroll.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>./assets/js/smoothScrollOnClick.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>./ajax/formularios.js"></script>
</body>

</html>