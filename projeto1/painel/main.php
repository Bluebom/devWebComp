<?php
    if(isset($_GET['loggout'])){
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
        </aside>
        <header>
            <div class="center">
                <div class="logo">
                    <h1>Painel de Controle</h1>
                </div>
                <!-- logo -->
                <div class="loggout">
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
                <!-- loggout -->
            </div>
            <!-- center -->
    
        </header>
    </section>

</body>

</html>