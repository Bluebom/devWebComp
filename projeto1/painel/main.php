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
                    <a href="#">Cadastrar Depoimento</a>
                    <a href="#">Cadastrar Serviço</a>
                    <a href="#">Cadastrar Slides</a>                    
                    <h2>Gestão</h2>
                    <a href="#">Listar Depoimentos</a>
                    <a href="#">Listar Serviços</a>
                    <a href="#">Listar Slides</a>
                    <h2>Administração do painel</h2>
                    <a href="#">Editar Usuário</a>
                    <a href="#">Adicionar Usuário</a>
                    <h2>Configuração Geral</h2>
                    <a href="#">Editar</a>
            </div>
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
            <div class="box_content">
                <h1> <i class="fas fa-home"></i> Painel de Controle - Franklin Henrique</h1>
                <div class="div_content_wrap">
                    <div class="users_on">
                        <h2>Usuários Online</h2>
                        <span>###</span>
                    </div>
                    <div class="all_visits">
                        <h2>Total de Visitas</h2>
                        <span>###</span>
                    </div>
                    <div class="today_visits">
                        <h2>Visitas Hoje</h2>
                        <span>###</span>
                    </div>
                </div>
            </div>
            <!-- box_content -->
            <!-- <div class="box_content"></div>
            <div class="wrap">
            <div class="box_content"></div>
            <div class="box_content"></div>
            </div> -->
            <!-- wrap -->
        </div>
        <!-- center -->
    </div>
    <!-- painel_content -->

    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/script.js"></script>
</body>

</html>