<div class="box_content">
    <h2><i class="fas fa-pen"></i> Editar Usuário</h2>
    <form method="post" enctype="multipart/form-data">

        <?php if(isset($_POST['acao'])){
            // ENVIEI MEU FORM
            // Painel::alert('success', 'Cadastro realizado com sucesso!');

            $nome = $_POST['nome'];
            $senha = $_POST['password'];
            $img = $_FILES['img'];
            $imgAtual = $_SESSION['img'];
            $usuario = new Usuario();
            if($img['name'] != '')
            {
                if(Painel::imagemValida($img)){
                    Painel::deleteFile($imgAtual);
                    $img = Painel::uploadFile($img);
                    $_SESSION['img'] = $img;
                    if($usuario->atualizarUsuario($nome, $senha, $img))
                    {
                        Painel::alert('success', 'Cadastro realizado com sucesso!');
                    } else
                    {
                        Painel::alert('fail', 'Falha no cadastro!');
                    };
                } else {
                    Painel::alert('fail', 'O formato da imagem não é válido!');
                };
            } else {
                $img = $imgAtual;
                if($usuario->atualizarUsuario($nome, $senha, $img))
                {
                    Painel::alert('success', 'Cadastro realizado com sucesso!');
                } else
                {
                    Painel::alert('fail', 'Falha no cadastro!');
                };
            }
        }?>

        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" value="<?php echo $_SESSION['nome']?>" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>senha: <p><input name="password" type="password" value="<?php echo $_SESSION['password']?>" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>
            Imagem: 
            <p><input name="img" type="file"></p>
        </label>
        </div>
        <!-- form_group -->
        <div class="form_group">
        <p><input name="acao" type="submit" value="Atualizar"></p>
        </div>
        <!-- form_group -->
    </form>
</div>