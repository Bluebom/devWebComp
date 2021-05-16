<?php
    // Loços e loops
    for($i = 0; $i < 10; $i++){
        echo $i .' ';
    };

    echo '<br>';
    
    $i = 0;
    while($i < 10){
        echo $i .' ';
        $i++;
    };

    echo '<br>';

    $i = 0;
    do{
        echo 'hello world' .'<br>' .$i .'<br>';
        $i++;
    }while($i < 10);
?>