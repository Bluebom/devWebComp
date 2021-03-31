<?php
    $user = 'exampleMe';
    $password = '8aca7EAE!!';
    $database = 'mod4';
    $table = 'clientes';

    $id = 9;
    $momento_registro = date('Y-m-d H-i-s');
    
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    
    $sql = $pdo->prepare("UPDATE $table SET nome='Mario', sobrenome='Da Silva', momento_registro=? WHERE id=?");

    if($sql->execute(array($momento_registro, $id))){
        echo 'Meu cliente foi atualizado com sucesso!';
    }
?>