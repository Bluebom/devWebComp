<?php
session_start();
$autoload = function($class){
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://192.168.2.109/development/devWebComp/projeto1/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH."painel/");

// Conectar com DB
define('HOST', 'localhost');
define('USER', 'exampleMe');
define('PASSWORD', '8aca7EAE!!');
define('DATABASE','projeto1');

// functions
function pickCargo($cargo){
    $arr = [
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador',
    ];
    
    echo $arr[$cargo];
}