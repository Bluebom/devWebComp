<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function($class){
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

define('INCLUDE_PATH', 'http://franklinhenrique.com/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH."painel/");

// Conectar com DB
define('HOST', '192.185.176.109');
define('USER', 'frankl04_proj');
define('PASSWORD', '');
define('DATABASE','frankl04_Projeto1');

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