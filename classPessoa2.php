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

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this);
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

$var = new Programador();

// echo $var->nome;
$var->verDados();

?>