<?php

class Documento {
    private $numero;
    public function getNumero() {
        return $this->numero;
    }
     public function setNumero($numero){
         $this->numero = $numero;
     }

}

class CPF extends Documento {

     public function validar():bool {

        $numerocpg = $this->getNumero();
         return true;
     }

}

$var = new CPF();
$var->setNumero("45845454");
print_r ($var->validar());
echo $var->getNumero();

?>