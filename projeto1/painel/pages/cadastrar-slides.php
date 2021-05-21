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
            $img = $_FILES['img'];
            if($nome == '')
            {
                Painel::alert('fail', 'O campo "Nome do Slide" não pode ficar vazio!');
            } else{
                if(Painel::imagemValida($img) == false)
                {
                    Painel::alert('fail', 'O formato da imagem não é válido!');
                } else 
                {
                    // cadastrar banco no dados
                    $img = Painel::uploadFile($img);
                    $arr = ['nome'=>$nome, 'nome_tabela'=>'tb_site.slides', 'slide'=>$img];
                    Painel::insert($arr);
                    Painel::alert('success', 'Cadastro realizado com sucesso!');
                }
            }
        }?>
        
        <div class="form_group">
        <label>Nome do slide: <p><input name="nome" type="text" required></p></label>
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