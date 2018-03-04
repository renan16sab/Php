<?php

interface Veiculo {

    public function acelerar($velocidade);    
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {


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

class Siena extends Automovel{

    public function empurrar(){

    }
}
$var = new Siena();
$var->acelerar(200);
?>