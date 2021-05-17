<?php
    checkPermissionPage(2);
?>
<div class="box_content">
    <h2><i class="fas fa-pen"></i> Adicionar Usuário</h2>
    
    <form method="post" enctype="multipart/form-data">

        <?php 
        if(isset($_POST['acao']))
        {
                    // Painel::alert('fail', 'Falha no cadastro!');
                    // Painel::alert('success', 'Cadastro realizado com sucesso!');
            $login = $_POST['login'];
            $nome = $_POST['nome'];
            $senha = $_POST['password'];
            $cargo = $_POST['cargo'];
            echo '<script>console.log("'.$cargo.'")</script>';
            $img = $_FILES['img'];
            $usuario = new Usuario();
            if($cargo == '')
            {
                Painel::alert('fail', 'O cargo precisa estar selecionado!');
            } else if($img['name'] == '')
            {
                Painel::alert('fail', 'A imagem precisa estar selecionada!');
            } else{
                if($cargo >= $_SESSION['cargo'])
                {
                    Painel::alert('fail', 'Você não pode selecionar um cargo maior que o seu!');
                } else if(Painel::imagemValida($img) == false)
                {
                    Painel::alert('fail', 'O formato da imagem não é válido!');
                }else if(Usuario::userExist($login))
                {
                    Painel::alert('fail', 'Esse login já existe! Selecione outro por favor.');
                } else 
                {
                    // cadastrar banco no dados
                    $img = Painel::uploadFile($img);
                    $usuario->cadastrarUsuario($login, $senha, $img, $nome, $cargo);
                    Painel::alert('success', 'Cadastro realizado com sucesso!');
                }
            }
        }?>

        <div class="form_group">
        <label>Login: <p><input name="login" type="text" required></p></label>
        </div>
        <!-- form_group -->
        
        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>Senha: <p><input name="password" type="password" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label class="down-arrow">Cargo:
        <p><select name="cargo">
            <?php
                foreach (Painel::$cargos as $key => $value){
                    if($key < $_SESSION['cargo']){
                        if($key == 0){
                            echo '<option value="'.$key.'" selected>'.$value.'</option>';

                        } else {
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        }
                    } 
                }
            ?>
        </select></p>
        </label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>
            Imagem: 
            <p><input name="img" type="file" require></p>
        </label>
        </div>
        <!-- form_group -->
        <div class="form_group">
        <p><input name="acao" type="submit" value="Atualizar"></p>
        </div>
        <!-- form_group -->
    </form>
</div>