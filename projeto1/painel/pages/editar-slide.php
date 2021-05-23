<?php
    if(isset($_GET['id'])){
        $id = (int)$_GET['id'];
        $slide = Painel::select('tb_site.slides', 'id = ?', array($id));
    } else{
        Painel::alert('fail', 'Você precisa passar o parâmetro ID.');
        die();
    }
?>
<div class="box_content">
    <h2><i class="fas fa-pen"></i> Editar Slide</h2>
    <form method="post" enctype="multipart/form-data">

        <?php if(isset($_POST['acao'])){
            // ENVIEI MEU FORM
            // Painel::alert('success', 'Cadastro realizado com sucesso!');

            $nome = $_POST['nome'];
            $img = $_FILES['img'];
            $imgAtual = $slide['slide'];
            if($img['name'] != '')
            {
                if(Painel::imagemValida($img)){
                    Painel::deleteFile($imgAtual);
                    $img = Painel::uploadFile($img);
                    $arr = ['nome'=>$nome, 'nome_tabela'=>'tb_site.slides', 'slide'=>$img, 'id' => $id];
                    Painel::update($arr);
                    $slide = Painel::select('tb_site.slides', 'id = ?', array($id));
                    Painel::alert('success', 'Depoimento editado com sucesso!');
                } else {
                    Painel::alert('fail', 'O formato da imagem não é válido!');
                };
            } else {
                $img = $imgAtual;
                $arr = ['nome'=>$nome, 'nome_tabela'=>'tb_site.slides', 'slide'=>$img, 'id' => $id];
                Painel::update($arr);
                $slide = Painel::select('tb_site.slides', 'id = ?', array($id));
                Painel::alert('success', 'Depoimento editado com sucesso!');    
            }
        }?>

        <div class="form_group">
        <label>Nome: <p><input name="nome" type="text" value="<?php echo $slide['nome'];?>"></p></label>
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