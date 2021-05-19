<?php
    if(isset($_GET['excluir'])){
        $idExcluir = (int)$_GET['excluir'];
        Painel::deleteLine('tb_site.depoimentos', $idExcluir);
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-depoimento');
    }
    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porPagina = 2;
    $depoimentos = Painel::selectAll('tb_site.depoimentos', ($paginaAtual-1)*$porPagina, $porPagina);
?>
<div class="box_content">
    <h2><i class="fas fa-id-card"></i> Depoimentos Cadastrados</h2>
    <table>
        <thead>
            <th>Nome</th>
            <th>Data</th>
            <th>Editar</th>
            <th>Deletar</th>
        </thead>
        <tbody>
            <?php
                foreach ($depoimentos as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value['nome']?></td>
                <td><?php echo $value['data']?></td>
                <td><a action="edite" tipo="depoimento" href="#" class="btn_edit"><i class="fas fa-pen"></i></a></td>
                <td><a action="delete" tipo="depoimento" href="<?php echo INCLUDE_PATH_PAINEL;?>listar-depoimento?excluir=<?php echo $value['id'];?>" class="btn_delete"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="paginacao">
        <?php
            $totalPaginas = ceil(count(Painel::selectAll('tb_site.depoimentos')) / 2);
            for($i = 1; $i <= $totalPaginas; $i++){
                if($i == $paginaAtual)
                    echo '<a class="selected" href="'.INCLUDE_PATH_PAINEL.'listar-depoimento?pagina='.$i.'">'.$i.'</a>';
                else
                    echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-depoimento?pagina='.$i.'">'.$i.'</a>';
            }
        ?>
    </div>
</div><!-- box_content -->