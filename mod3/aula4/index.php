<?php
    
    include('interface1.php');

    class Teste implements Interface1{
        public function printOnScreen($e){
            echo "Olá $e"; 
        }

    }

    $teste = new Teste;
    $teste->printOnScreen('Franklin')
?>