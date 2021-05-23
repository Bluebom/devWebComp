<?php
    checkPermissionPage(2);
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $depoimento = Painel::select('tb_site.depoimentos', 'id = ?', array($id));
    } else{
        Painel::alert('fail', 'Você precisa passar o parâmetro ID.');
        die();
    }
?>
<div class="box_content">
    <h2><i class="fas fa-pen"></i> Editar Depoimento</h2>
    
    <form method="post" enctype="multipart/form-data">

        <?php 
        if(isset($_POST['acao']))
        {
            if(Painel::update($_POST)){
                $depoimento = Painel::select('tb_site.depoimentos', 'id = ?', array($id));
                Painel::alert('success', 'Depoimento editado com sucesso!');
            } else{
                Painel::alert('fail', 'Campos vazios não são permitidos.');
            }
        }?> 

        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" value="<?php echo $depoimento['nome']?>"></p></label>
        </div>
        <!-- form_group -->
        
        <div class="form_group">
        <label>Depoimento: <p><textarea name="depoimento"><?php echo $depoimento['depoimento']?></textarea></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group">
        <label>Data: <p><input type="text" formato="data" name="data" value="<?php echo $depoimento['data']?>"></p></label>
        </div>
        <!-- form_group -->        

        <div class="form_group">
        <p>
            <input type="hidden" name="nome_tabela" value="tb_site.depoimentos">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input name="acao" type="submit" value="Atualizar">
        </p>
        </div>
        <!-- form_group -->
    </form>
</div>