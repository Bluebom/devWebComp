<?php
    $user = 'exampleMe';
    $password = '8aca7EAE!!';
    $database = 'mod4';
    $tableOne = 'cargos';
    $tableTwo = 'clientes';
    $pdo = new PDO("mysql:host=localhost; dbname=$database", $user, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM $tableTwo LEFT JOIN $tableOne ON $tableTwo.`cargo` = $tableOne.`id`");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        # code...
        echo $value['nome'] .' | ' .$value['nome_cargos'] .'<hr>';
    }
?>