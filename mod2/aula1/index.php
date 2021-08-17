<?php
    // Array single
    $arr = array('Franklin', 'Felipe', 'Guilherme');
    $arr = array('Guilherme', 'chave2' => 'João');

    $arr[0] = 'Guilherme';
    $arr[] = 'João';

    // Arrays multidimensionais

    // $arr2 = array(array('Franklin', 'João'), array(21,45));
    $arr2 = array('chave1' => 'Guilherme', 'João');

    echo $arr2['chave1'];
?>