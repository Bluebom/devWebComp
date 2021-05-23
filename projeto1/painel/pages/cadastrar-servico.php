<div class="box_content">
    <h2><i class="fas fa-pen"></i> Adicionar Serviços</h2>
    
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
        <label>Ícone para o serviço: <p><input type="text" name="icon" required></p></label>
        </div>
        <!-- form_group -->       

        <div class="form_group">
        <label>Descrição do serviço: <p><textarea name="servico" required></textarea></p></label>
        </div>
        <!-- form_group -->       
        
        <div class="form_group">
        <p>
            <input type="hidden" name="nome_tabela" value="tb_site.servicos">
            <input name="acao" type="submit" value="Atualizar">
        </p>
        </div>
        <!-- form_group -->
    </form>
</div>