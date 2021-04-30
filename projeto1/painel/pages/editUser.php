<div class="box_content">
    <h2><i class="fas fa-pen"></i> Editar Usuário</h2>
    <form method="post" enctype="multipart/form-data">

        <?php if(isset($_POST['acao'])){
            // ENVIEI MEU FORM
            Painel::alert('sucess', 'Cadastro realizado com sucesso!');
        }?>

        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" value="<?php echo $_SESSION['nome']?>" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>senha: <p><input name="senha" type="password" value="<?php echo $_SESSION['password']?>" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>
            Imagem: 
            <p><input name="img" type="file"></p>
            <p><input type="hidden" name="imagem_atual" value="<?php echo $_SESSION['img']?>"></p>
        </label>
        </div>
        <!-- form_group -->
        <div class="form_group">
        <p><input name="acao" type="submit" value="Atualizar"></p>
        </div>
        <!-- form_group -->
    </form>
</div>