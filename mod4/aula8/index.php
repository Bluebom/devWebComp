<?php
    define('USER', 'exampleMe');
    define('PASSWORD', '8aca7EAE!!');

    $database = 'mod4';
    $tableOne = 'filmes';
    $tableTwo = 'categorias';

    try{
        $db = new PDO("mysql:host=localhost;dbname=$database", USER, PASSWORD);
        $select = $db->prepare("SELECT * FROM $tableOne WHERE categoria_id = (SELECT id FROM $tableTwo WHERE nome = 'terror')");
        $select->execute();

        echo '<pre>';
        var_dump($select->fetchAll(PDO::FETCH_ASSOC));
        echo '</pre>';
    }catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>