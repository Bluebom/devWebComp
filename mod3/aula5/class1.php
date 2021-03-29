<?php
class Class1
{
    private $nome;
    private $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Olá $this->nome, você tem $this->idade anos ?";
    }

    public function getName()
    {
        # code...
        return $this->nome;
    }


    public function getAge()
    {
        # code...
        return $this->idade;
    }
}
