<?php
$autoload = function ($class_name) {
        include("./$class_name.php");
};

spl_autoload_register($autoload);
