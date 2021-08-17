<?php
    class minhaClasse
    {
        const VALOR = 'Hello world';
        public function __construct()
        {
            echo self::VALOR;
        }
    }
    
    new minhaClasse();

?>