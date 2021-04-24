<?php
session_start();
$autoload = function($class){
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/development/devWebComp/projeto1/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH."painel/");

// Conectar com DB
define('HOST', 'localhost');
define('USER', 'exampleMe');
define('PASSWORD', '8aca7EAE!!');
define('DATABASE','projeto1');