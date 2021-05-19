<?php
    checkPermissionPage(2);
?>
<div class="box_content">
    <h2><i class="fas fa-pen"></i> Adicionar Depoimentos</h2>
    
    <form method="post" enctype="multipart/form-data">

        <?php 
        if(isset($_POST['acao']))
        {
            if(Painel::insert($_POST)){
                Painel::alert('success', 'Cadastro realizado com sucesso!');
            } else{
                Painel::alert('fail', 'Cadastro não foi realizado!');
            }
        }?>

        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" required></p></label>
        </div>
        <!-- form_group -->
        
        <div class="form_group">
        <label>Depoimento: <p><textarea name="depoimento" required></textarea></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>Data: <p><input type="text" formato="data" name="data" required></p></label>
        </div>
        <!-- form_group -->        

        <div class="form_group">
        <p>
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">
            <input name="acao" type="submit" value="Atualizar">
        </p>
        </div>
        <!-- form_group -->
    </form>
</div>