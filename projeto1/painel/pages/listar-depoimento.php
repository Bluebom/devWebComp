<?php
    $depoimentos = Painel::selectAll('tb_site.depoimentos');
?>
<div class="box_content">
    <h2><i class="fas fa-id-card"></i> Depoimentos Cadastrados</h2>
    <table>
        <th>Nome</th>
        <th>Data</th>
        <th>Editar</th>
        <th>Deletar</th>
        <?php
            foreach ($depoimentos as $key => $value) {
        ?>
        <tr>
            <td><?php echo $value['nome']?></td>
            <td><?php echo $value['data']?></td>
            <td><a href="#" class="btn_edit"><i class="fas fa-pen"></i></a></td>
            <td><a href="#" class="btn_delete"><i class="fas fa-times"></i></a></td>
        </tr>
        <?php }?>
    </table>
</div><!-- box_content -->