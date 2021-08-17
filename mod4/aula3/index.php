<?php
// conecting with mysql
$user = 'exampleMe';
$password = '8aca7EAE!!';
$database = 'mod4';
$table = 'clientes';

$pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

// my data
$id = 9;
$momento_registro = date('Y-m-d H-i-s');

$sql = $pdo->prepare("DELETE FROM $table WHERE id = ?");

if ($sql->execute(array($id))) {
    echo 'O cliente foi deletado com sucesso!';
}
