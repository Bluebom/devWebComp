<?php
    $name = 'Franklin';

    function mostraNome($var, $idade){
        echo "<h2>Nome é: $var</h2>";
        echo "<p>Idade é: $idade</p>";
    };

    function rotornarString(){
        return 'Guilherme gay';
    };

    echo rotornarString();

    mostraNome($name, 23);

?>