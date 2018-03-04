<?php

class Pessoa {

    public $nome = "Renan";
    protected $idade = "20";
    private $senha = "321";

    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

$var = new Pessoa();

// echo $var->nome;
$var->verDados();

?>