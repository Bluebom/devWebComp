<?php
    if(isset($_COOKIE['lembrar'])){
        $user = $_COOKIE['user'];
        $password = $_COOKIE['password'];
        $sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin.users` WHERE user = ? AND password = ?");
        $sql->execute(array($user, $password));
        if($sql->rowCount() == 1){
            $info = $sql->fetch();
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            $_SESSION['img'] = $info['img'];
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['nome'];
            header('Location:' .INCLUDE_PATH_PAINEL);
            die();
        }
    }
?>
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
                    $info = $sql->fetch();
                    $_SESSION['login'] = true;
                    $_SESSION['user'] = $user;
                    $_SESSION['password'] = $password;
                    $_SESSION['img'] = $info['img'];
                    $_SESSION['cargo'] = $info['cargo'];
                    $_SESSION['nome'] = $info['nome'];
                    if(isset($_POST['lembrar'])){
                        setcookie('lembrar', true, time()+(60*60*2), '/');
                        setcookie('user', $user, time()+(60*60*2), '/');
                        setcookie('password', $password, time()+(60*60*2), '/');
                        
                    }
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
            <div class="form_group_login">
                <input type="submit" name="acao" value="Logar" >
                <label class="container">Lembrar-me
                    <input type="checkbox" name="lembrar">
                    <span class="checkmark"></span>
                </label>
            </div>
        </form>

    </div> <!-- box_login -->
</body>

</html>