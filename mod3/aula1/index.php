<?php
    include('exemplo.class.php');
    // Instância de obj
    $exemplo = new Exemplo();
    $exemplo->setVar('Henrique');
    $exemplo->getVar();
    // $exemplo->var2 = 'olá';

    // echo $exemplo->method(2);

    echo Exemplo::$var3

?>