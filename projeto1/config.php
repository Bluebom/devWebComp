<?php

$autoload = function ($class_name) {
    include("classes/$class_name.php");
};

spl_autoload_register($autoload);


define('INCLUDE_PATH', 'http://franklinhenrique.com/');
