<?php
class Constru {
private $logradouro;
private $numero;
private $cidade;

public function __construct($a, $b, $c){
    $this->logradouro=$a;
    $this->numero=$b;
    $this->cidade=$c;

   }

}
$endereco = new Constru("Rua Bla", "431","Jaboatao");
var_dump($endereco);
?>