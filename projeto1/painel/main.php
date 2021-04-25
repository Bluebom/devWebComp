<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
</head>

<body>
    <section class="topo_painel">
        <aside>
            <div class="box_user">
                <?php
                    if($_SESSION['img'] == ''){
                ?>
                <div class="avatar_user">
                    <i class="fas fa-user"></i>
                </div>
                <!-- avatar_user -->
                <?php
                    ;} else{
                ?>
                <div class="imagem_user">
                    <img src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img'];?>">                        
                </div>
                <?php ;};?>
                <div class="nome_user">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <span><?php pickCargo($_SESSION['cargo']); ?></span>
                </div>
                <!-- nome_user -->
            </div>
            <!-- box_user -->
        </aside>
        <header>
            <div class="center">
                <div class="menu_btn">
                    <span>&equiv;</span>
                    <span>&times;</span>
                </div>
                <!-- menu_btn -->

                <div class="loggout">
                    <span>Sair</span>
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!-- loggout -->
            </div>
            <!-- center -->
            
        </header>
    </section>
    <div class="painel_content">
        <div class="center">
            <div class="box_content"></div>
            <!-- box_content -->
            <div class="box_content"></div>
            <!-- box_content -->
            <div class="wrap">
            <div class="box_content"></div>
            <!-- box_content -->
            <div class="box_content"></div>
            <!-- box_content -->
            </div>
            <!-- wrap -->
        </div>
        <!-- center -->
    </div>
    <!-- painel_content -->

    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/script.js"></script>
</body>

</html>