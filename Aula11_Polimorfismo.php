<?php

class Animal{
    public function Andar(){
        echo "O Animal andou";
        $this->Correr();
    }

    public function Correr(){
        echo " e depois correu ";
    }
}

class Cavalo extends Animal{
    public function Andar(){
    echo "O Cavalo andou";
    $this->Correr();
    }
}

$animal = new Cavalo();
$animal->Andar();