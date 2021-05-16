<?php
    // functions
    $arr1 = ['cor' => 'red', 2, 4];
    $arr2 = ['a', 'b', 'cor' => 'green', 'forma' => 'trapezoide', 4];
    $result = array_merge($arr1, $arr2);
    // print_r($arr1);
    // echo '<hr>';
    // print_r($arr2);
    // echo '<hr>';
    // print_r($result);

    print_r(array_intersect_key($arr1, $arr2));

    $arr = ['<p>Franklin</p>', 'Enrique', 'Thyaggo', 'Matheus'];
    echo '<hr>';

    print_r(array_map('strip_tags', $arr));


?>