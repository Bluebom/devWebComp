<?php
    class Exemplo
    {
        private $var1;
        private $var2;

        public static $var3 = 'estático';
        
        // public function method($ex){
        //     $ex2 = $this->method2($ex) + 5;
        //     echo $ex2;
        // }

        // private function method2($ex){
        //     return $ex**2;
        // }
        
        public function setVar($e){
            $this->var1 = $e;
        }

        public function getVar(){
            echo $this->var1 .'<hr>';
        }
    }

?>