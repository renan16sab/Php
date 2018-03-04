<?php

abstract class Animal {
    public function falar(){
        return "som";
    }

    public function mover(){
        return "Anda";
    }
}

class Gato extends Animal {

    public function falar(){
        return "Mia";
    }
}

class Cachorro extends Animal {
    public function falar(){
        return "Late";
    }
}

class Passaro extends Animal {
    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " .  parent::mover();
    }
}

$gato = new Gato();
echo $gato->falar();
echo $gato->mover();

echo "<br/>";

$cachorro = new Cachorro();
echo $cachorro->falar();
echo $cachorro->mover();

echo "<br/>";

$passaro = new Passaro();
echo $passaro->falar();
echo $passaro->mover();



