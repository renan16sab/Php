<?php

interface Veiculo {

    public function acelerar($velocidade);    
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Corsa implements Veiculo {


public function Acelerar($velocidade){


    echo "O carro acelera até" . $velocidade . "Km";
}

public function frenar($velocidade) {

    echo "O veiculo freia até" . $velocidade;
}

public function trocarMarcha($marcha){
    echo "O carro engatou a marcha " . $marcha;
}



}

$var = new Corsa();
$var->trocarMarcha('1');

?>