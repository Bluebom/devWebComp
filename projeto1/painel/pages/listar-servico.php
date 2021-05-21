<?php
    checkPermissionPage(2);
    if(isset($_GET['excluir'])){
        $idExcluir = (int)$_GET['excluir'];
        Painel::deleteLine('tb_site.servicos', $idExcluir);
        Painel::redirect(INCLUDE_PATH_PAINEL.'listar-servico');
    }
    $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $porPagina = 4;
    $servicos = Painel::selectAll('tb_site.servicos', ($paginaAtual-1)*$porPagina, $porPagina);
?>
<div class="box_content">
    <h2><i class="fas fa-id-card"></i> Serviços Cadastrados</h2>
    <table>
        <thead>
            <th>Serviços</th>
            <th>Ícones</th>
            <th>Editar</th>
            <th>Deletar</th>
        </thead>
        <tbody>
            <?php
                foreach ($servicos as $key => $value) {
            ?>
            <tr>
                <td><?php echo substr($value['servico'], 0, 16).'...'?></td>
                <td class="s_icones"><i class="<?php echo $value['icon']?>"></i></td>
                <td><a action="edite" tipo="serviço" href="<?php echo INCLUDE_PATH_PAINEL;?>editar-servico?id=<?php echo $value['id'];?>" class="btn_edit"><i class="fas fa-pen"></i></a></td>
                <td><a action="delete" tipo="serviço" href="<?php echo INCLUDE_PATH_PAINEL;?>listar-servico?excluir=<?php echo $value['id'];?>" class="btn_delete"><i class="fas fa-times"></i></a></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <div class="paginacao">
        <?php
            $totalPaginas = ceil(count(Painel::selectAll('tb_site.servicos')) / $porPagina);
            for($i = 1; $i <= $totalPaginas; $i++){
                if($i == $paginaAtual)
                    echo '<a class="selected" href="'.INCLUDE_PATH_PAINEL.'listar-servico?pagina='.$i.'">'.$i.'</a>';
                else
                    echo '<a href="'.INCLUDE_PATH_PAINEL.'listar-servico?pagina='.$i.'">'.$i.'</a>';
            }
        ?>
    </div>
</div><!-- box_content -->