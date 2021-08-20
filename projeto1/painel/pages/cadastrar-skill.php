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
            $nome = $_POST['nome'];
            $nivel = $_POST['range'];
            if($nome == '')
            {
                Painel::alert('fail', 'O campo "Nome do Slide" não pode ficar vazio!');
            } else{
                if($nivel == '')
                {
                    Painel::alert('fail', 'Selecione um nível!');
                } else 
                {
                    // cadastrar banco no dados
                    $arr = ['nome'=>$nome, 'nome_tabela'=>'tb_admin.skills', 'nivel'=>$nivel];
                    Painel::insert($arr);
                    Painel::alert('success', 'Cadastro realizado com sucesso!');
                }
            }
        }?>
        
        <div class="form_group">
        <label>Nome da habilidade: <p><input name="nome" type="text" required></p></label>
        </div>
        <!-- form_group -->

        <div class="form_group range">
        <label>
            Nível com a habilidade: 
            <p><input name="range" type="range" require max="100" min="0" step="5"></p>
        </label>
        </div>
        <!-- form_group -->
        <div class="form_group">
        <p><input name="acao" type="submit" value="Atualizar"></p>
        </div>
        <!-- form_group -->
    </form>
</div>