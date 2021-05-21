<?php
    checkPermissionPage(2);
    if(isset($_GET['excluir'])){
        $idExcluir = (int)$_GET['excluir'];
        $selectImagem = MySql::conectar()->prepare('SELECT slide FROM `tb_site.slides` WHERE id = ?');
        $selectImagem->execute(array($_GET['excluir']));
        $selectImagem = $selectImagem->fetch();
        Painel::deleteFile($selectImagem['slide']);
        Painel::deleteLine('tb_site.slides', $idExcluir);
        // Painel::redirect(INCLUDE_PATH_PAINEL.'listar-slides');
    }
    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porPagina = 4;
    $slides = Painel::selectAll('tb_site.slides', ($paginaAtual-1)*$porPagina, $porPagina);
?>
<div class="box_content">
    <h2><i class="fas fa-id-card"></i> Slides Cadastrados</h2>
    <table>
        <thead>
            <th>Nome</th>
            <th>Slide</th>
            <th>Editar</th>
            <th>Deletar</th>
        </thead>
        <tbody>
            <?php
                foreach ($slides as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['nome']?></td>
                <td><img class="slide" src="<?php echo INCLUDE_PATH_PAINEL?>uploads/<?php echo $value['slide']?>" alt="miniatura do slide"></td>
                <td><a action="edite" tipo="depoimento" href="<?php echo INCLUDE_PATH_PAINEL;?>editar-slide?id=<?php echo $value['id'];?>" class="btn_edit"><i class="fas fa-pen"></i></a></td>
                <td><a action="delete" tipo="depoimento" href="<?php echo INCLUDE_PATH_PAINEL;?>listar-slides?excluir=<?php echo $value['id'];?>" class="btn_delete"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="paginacao">
        <?php
            $totalPaginas = ceil(count(Painel::selectAll('tb_site.slides')) / $porPagina);
            for($i = 1; $i <= $totalPaginas; $i++){
                if($i == $paginaAtual)
                    echo '<a class="selected" href="'.INCLUDE_PATH_PAINEL.'listar-slides?pagina='.$i.'">'.$i.'</a>';
                else
                    echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-slides?pagina='.$i.'">'.$i.'</a>';
            }
        ?>
    </div>
</div><!-- box_content -->