<?php

    // substr
    $content = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores quae at exercitationem dolorum soluta omnis, earum delectus! Perspiciatis cum aut quas quidem mollitia maiores sint esse maxime, repellendus et hic!';
    echo substr($content, 0, 5) .'<hr>';
    
    // explode
    $pre_arr = 'Franklin Henrique Pinto França';
    
    $arr = explode(' ', $pre_arr);
    
    print_r($arr);

    // implode 
    $nomes = implode(' ', $arr);

    echo '<hr>' .$nomes;

    // strip_tags
    $content = '<h1>Guilherme</h1> Outra coisa';

    echo '<hr>' .strip_tags($content);

    // htmlentities

    echo '<hr>' .htmlentities($content);
?>