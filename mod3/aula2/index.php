<?php
class Filha
{

    protected function funcaoTeste()
    {
        echo 'chamando funcao teste';
        echo '<br>';
    }

    public function mostraOla()
    {
        $this->funcaoTeste();

        echo '<br>';

        echo 'Olá Mundo!';

        echo '<br>';
    }
}

class Pai extends Filha
{
    public function mostraOla()
    {
        parent::mostraOla();
        echo 'nova funcao';
        echo '<br>';
    }

    public function mostraTchau()
    {
        echo 'Tchau Mundo!';
        echo '<br>';
        $this->funcaoTeste();
    }
}

$filha = new Pai;

$filha->mostraOla();
$filha->mostraTchau();
$filha->mostraOla();
