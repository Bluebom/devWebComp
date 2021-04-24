<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL?>css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="box_login">
        <?php
            if(isset($_POST['acao'])){
                $user = $_POST['user'];
                $password = $_POST['password'];
                $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.users` WHERE user = ? AND password = ?");
                $sql->execute(array($user, $password));
                if($sql->rowCount() == 1){
                    // logado
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $user;
                    $_SESSION['password'] = $password;
                    header('Location:' .INCLUDE_PATH_PAINEL);
                    die();
                } else{
                    // falhou
                    echo '<div class="erro_box">&times; Senha ou usuário incorreto!</div>';
                }
            }
            
        ?>
        <h2>Painel de Controle</h2>
        <form method="POST">
            <input type="text" name="user" placeholder="Login" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" name="acao" value="Logar" >
        </form>

    </div> <!-- box_login -->
</body>

</html>