<?php 
    $usuariosOnline = Painel::listarUsuariosOnline();
?>

<div class="center">
    <div class="box_content">
        <h1> <i class="fas fa-cogs"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h1>
        <div class="div_content_wrap">
            <div class="users_on">
                <h2>Usuários Online</h2>
                <span><?php echo count($usuariosOnline)?></span>
            </div>
            <div class="all_visits">
                <h2>Total de Visitas</h2>
                <span>###</span>
            </div>
            <div class="today_visits">
                <h2>Visitas Hoje</h2>
                <span>###</span>
            </div>
        </div>
    </div>
    <div class="box_content">
        <h1> <i class="fas fa-users"></i> Usuários Online</h1>
        <table>
            <th>IP</th>
            <th>Última ação</th>
            <?php 
                foreach ($usuariosOnline as $key => $value) {
                    # code...
            ?>
            <tr>
                <td><?php echo $value['ip'];?></td>
                <td><?php echo date('d/m/Y H:i' ,strtotime($value['ultima_acao']));?></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>
<!-- center -->