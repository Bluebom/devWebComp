<?php
    checkPermissionPage(2);
?>
<div class="box_content">
    <h2><i class="fas fa-pen"></i> Editar Usuário</h2>
    <form method="post" enctype="multipart/form-data">

        <?php if(isset($_POST['acao'])){

        }?>

        <div class="form_group">
        <label>login: <p><input name="login" type="text" required></p></label>
        </div>
        <!-- form_group -->
        
        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>senha: <p><input name="password" type="password" required></p></label>
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