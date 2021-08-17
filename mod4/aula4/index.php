<?php
// Conectando ao banco de dados 
$user = 'exampleMe';
$password = '8aca7EAE!!';
$database = 'mod4';
$tableOne = 'posts';
$tableTwo = 'categorias';
$pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);

// // meus dados
// /* */
// /* */


// $sql = $pdo->prepare("SELECT * FROM $tableTwo");
// $sql-> execute();

// $info = $sql->fetchAll();

// foreach($info as $key => $value){
//     $categoria_id = $value['id'];
//     echo 'Exibindo posts de: ' .$value['nome'] .'<br>';
//     $sql = $pdo->prepare("SELECT * FROM $tableOne WHERE categoria_id=$categoria_id");
//     $sql-> execute();
//     $infoPosts = $sql->fetchAll();
//     foreach($infoPosts as $key => $val){
//         echo 'Título: '.$val['titulo'] .'<br>';
//         echo 'Notícia: '.$val['conteudo'] .'<hr>';
//     }

// }

$sql = $pdo->prepare("SELECT $tableOne.*, $tableTwo.*, $tableOne.`id` as `post_id` FROM $tableOne INNER JOIN $tableTwo ON $tableOne.`categoria_id` = $tableTwo.`id`");

$sql->execute();

$info = $sql->fetchAll(PDO::FETCH_ASSOC);

foreach($info as $key => $val){
    if($val['categoria_id'] == 1){
        echo '<strong>Categoria: '.$val['nome'] .'</strong>' .'<hr>';
        echo $val['titulo'] .'<br>';
        echo $val['conteudo'] .'<br><br>';
    }
    if($val['categoria_id'] == 2){
        echo '<strong>Categoria: '.$val['nome'] .'</strong>' .'<hr>';
        echo $val['titulo'] .'<br>';
        echo $val['conteudo'] .'<br><br>';
    }
}

echo '<pre>';
print_r($info);
echo '</pre>';
