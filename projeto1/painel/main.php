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
            <div class="items_menu"> 
                    <h2>Cadastro</h2>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Cadastrar Depoimento</a>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Cadastrar Serviço</a>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Cadastrar Slides</a>                    
                    <h2>Gestão</h2>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Listar Depoimentos</a>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Listar Serviços</a>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Listar Slides</a>
                    <h2>Administração do painel</h2>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>editUser">Editar Usuário</a>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>addUser">Adicionar Usuário</a>
                    <h2>Configuração Geral</h2>
                    <a href="<?php echo INCLUDE_PATH_PAINEL?>#">Editar</a>
            </div>
        </aside>
        <header>
            <div class="center">
                <div class="menu_btn">
                    <span>&equiv;</span>
                    <span>&times;</span>
                </div>
                <!-- menu_btn -->

                <div class="home_btn">
                        <a href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fas fa-home"></i></a>
                </div>

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
        <?php Painel::loadPage(); ?>
    </div>
    <!-- painel_content -->

    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/script.js"></script>
</body>

</html>