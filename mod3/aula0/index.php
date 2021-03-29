<?php
    class Pessoa{
        // Obj pessoa

        private $nome = 'Guilherme';
        private $idade = '23';
        private $peso = '70kg';

        public function crescer(){
            echo 'estou crescendo <br>';
            $this->comer();
        }

        private function comer(){
            echo 'estou comendo';
        }
    }

    // Instaciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
?>