<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
$autoload = function($class){
    include('classes/'.$class.'.php');
};

spl_autoload_register($autoload);

// http://franklinhenrique.com/
http://localhost/dashboard/devWebComp/projeto1/
define('INCLUDE_PATH', 'http://192.168.2.119/dashboard/devWebComp/projeto1/');
// define('INCLUDE_PATH', 'http://franklinhenrique.com/');
define('INCLUDE_PATH_PAINEL', INCLUDE_PATH."painel/");
define('BASE__DIR__PAINEL', __DIR__. '/painel' );

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
function pickCargo($key){
    echo Painel::$cargos[$key];
}

function selecionadoMenu($par){
    $url = explode('/', @$_GET['url'])[0];
    if($url == $par){
        // <i class="fas fa-angle-double-right"></i>
        echo 'class="menu-active"';
    }
}

function checkPermissionMenu($permission){
    if($_SESSION['cargo'] >= $permission){
        return;
    } else{
        echo 'style="display: none;"';
    }
}

function checkPermissionPage($permission){
    if($_SESSION['cargo'] >= $permission){
        return;
    } else{
        include('painel/pages/permission_denied.php');
        die();
    }
}