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
                    <img  width="128" height="128" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $_SESSION['img'];?>">                        
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
                    <a <?php selecionadoMenu('cadastrar-depoimento');?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-depoimento">Cadastrar Depoimento</a>
                    <a <?php selecionadoMenu('cadastrar-servico');?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-servico">Cadastrar Serviço</a>
                    <a <?php selecionadoMenu('cadastrar-slides');?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar-slides">Cadastrar Slides</a>                    
                    <h2 <?php checkPermissionMenu(2);?>>Gestão</h2>
                    <a <?php selecionadoMenu('listar-depoimento');?><?php checkPermissionMenu(2);?> href="<?php echo INCLUDE_PATH_PAINEL?>listar-depoimento">Listar Depoimentos</a>
                    <a <?php selecionadoMenu('listar-servico');?><?php checkPermissionMenu(2);?> href="<?php echo INCLUDE_PATH_PAINEL?>listar-servico">Listar Serviços</a>
                    <a <?php selecionadoMenu('listar-slides');?><?php checkPermissionMenu(2);?>href="<?php echo INCLUDE_PATH_PAINEL?>listar-slides">Listar Slides</a>
                    <h2>Administração do painel</h2>
                    <a <?php selecionadoMenu('editUser');?> href="<?php echo INCLUDE_PATH_PAINEL?>editUser">Editar Usuário</a>
                    <a <?php selecionadoMenu('adicionar-usuario');?> <?php checkPermissionMenu(2);?> href="<?php echo INCLUDE_PATH_PAINEL?>adicionar-usuario">Adicionar Usuário</a>
                    <h2>Configuração Geral</h2>
                    <a <?php selecionadoMenu('editar');?> href="<?php echo INCLUDE_PATH_PAINEL?>#">Editar</a>
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
    <script src="<?php echo INCLUDE_PATH ?>./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/script.js"></script>
</body>

</html>