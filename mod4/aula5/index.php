<?php
$user = 'exampleMe';
$password = '8aca7EAE!!';
$database = 'mod4';
$table = 'clientes';
$group = 'cargo';

$pdo = new PDO("mysql:host=localhost; dbname=$database", $user, $password);

$sql = $pdo->prepare("SELECT $table.`cargo`, $table.`nome` FROM $table GROUP BY $group, nome LIMIT 2");
$sql->execute();
$clientes = $sql->fetchAll();

echo '<pre>';
print_r($clientes);
echo '</pre>';

foreach ($clientes as $key => $value) {
    echo $value['nome'] . '<br><br>';
}
