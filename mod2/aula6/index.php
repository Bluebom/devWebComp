<?php
    
    $nome = 'Guilherme';

    switch($nome){
        case 'Guilherme';
            echo 'Minha variável é Gui';
            break;
        case 'João';
            echo 'Minha variável é Jaum';
            break;
    };

    for($i=0; $i < 10; $i++){
        if($i==5 || $i == 9){
            continue;
        };
        echo '<hr>' .$i;
        // if($i == 5){
        //     break;
        // };
    }

?>