<?php
abstract class Teste
{
    public function func1()
    {
        echo 'chamando função 1' .'<hr>';
    }
    // abstract function func2();
    protected static function otherMethodStatic(){
        echo 'meu outro método' .'<hr>';
    } 
}

class Principal extends Teste
{
    private static function metodoestatico(){
        echo 'método estático' .'<hr>';
    }

    public function func2(){
        echo 'estou declarando oficialmente um método abstrato' .'<hr>';
    }

    public function funcao(){
        self::metodoestatico();
        Teste::otherMethodStatic();
    }
}

$principal = new Principal;
$principal->func1();
$principal->func2();
$principal->funcao();
