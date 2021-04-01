<?php
    define('USER', 'exampleMe');
    define('PASSWORD', '8aca7EAE!!');
    
    $host = 'localhost';
    $database = 'example_database';
    $table = 'todo_list';

    try{
        $pdo = new PDO("mysql:host=$host;dbname=$database", USER, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $pdo->prepare("SELECT * FROM `attr`");
        $sql->execute();

    }catch(Exception $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    
?>