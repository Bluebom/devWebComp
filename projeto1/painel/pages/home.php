<?php 
    $usuariosOnline = Painel::listarUsuariosOnline();
    $pegarVisitasTotais = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
    $pegarVisitasTotais->execute();
    $pegarVisitasTotais = $pegarVisitasTotais->rowCount();

    $pegarVisitasHoje = MySql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
    $pegarVisitasHoje->execute(array(date('Y-m-d')));
    $pegarVisitasHoje = $pegarVisitasHoje->rowCount();
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
                <span><?php echo $pegarVisitasTotais;?></span>
            </div>
            <div class="today_visits">
                <h2>Visitas Hoje</h2>
                <span><?php echo $pegarVisitasHoje;?></span>
            </div>
        </div>
    </div>
    <div class="box_content">
        <h1> <i class="fas fa-users"></i> Usuários Online no site</h1>
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
    <div class="box_content">
        <h1> <i class="fas fa-users-cog"></i> Usuários do Painel</h1>
        <table>
            <th>Nome</th>
            <th>Cargo</th>
            <?php 
                $usuariosPainel = MySql::conectar()->prepare("SELECT * FROM `tb_admin.users`");
                $usuariosPainel->execute();
                $usuariosPainel = $usuariosPainel->fetchAll();
                foreach ($usuariosPainel as $key => $value) {
                    # code...
            ?>
            <tr>
                <td><?php echo $value['user'];?></td>
                <td><?php echo pickCargo($value['cargo']);?></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>
<!-- center -->