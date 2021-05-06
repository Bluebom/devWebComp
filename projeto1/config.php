<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function($class){
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://localhost/development/devWebComp/projeto1/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH."painel/");

// Conectar com DB
// define('HOST', '192.185.176.109');
// define('USER', 'frankl04_proj');
// define('PASSWORD', '8aca7EAE!!');
// define('DATABASE','frankl04_Projeto1');
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','projeto_01');

// Consts para painel de controle
define('NOME_EMPRESA', 'Franklin Henrique');

// functions
function pickCargo($cargo){
    $arr = [
        '0' => 'Normal',
        '1' => 'Sub Administrador',
        '2' => 'Administrador',
    ];
    
    echo $arr[$cargo];
}