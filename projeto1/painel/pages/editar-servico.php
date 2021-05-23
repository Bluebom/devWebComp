<?php
    checkPermissionPage(2);
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $servicos = Painel::select('tb_site.servicos', 'id = ?', array($id));
    } else{
        Painel::alert('fail', 'Você precisa passar o parâmetro ID.');
        die();
    }
?>
<div class="box_content">
    <h2><i class="fas fa-pen"></i> Editar Serviços</h2>
    
    <form method="post" enctype="multipart/form-data">

        <?php 
        if(isset($_POST['acao']))
        {
            if(Painel::update($_POST)){
                $servicos = Painel::select('tb_site.servicos', 'id = ?', array($id));
                Painel::alert('success', 'Depoimento editado com sucesso!');
            } else{
                Painel::alert('fail', 'Campos vazios não são permitidos.');
            }
        }?> 

        <div class="form_group">
        <label>Ícone para o serviço: <p><input type="text" name="icon" value="<?php echo $servicos['icon']?>"></p></label>
        </div>
        <!-- form_group -->       

        <div class="form_group">
        <label>Descrição do serviço: <p><textarea name="servico" required><?php echo $servicos['servico']?></textarea></p></label>
        </div>
        <!-- form_group -->           

        <div class="form_group">
        <p>
            <input type="hidden" name="nome_tabela" value="tb_site.servicos">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input name="acao" type="submit" value="Atualizar">
        </p>
        </div>
        <!-- form_group -->
    </form>
</div>