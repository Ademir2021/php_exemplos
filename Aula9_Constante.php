<?php

class Pessoa{
    const nome = "Ademir";

    public function exibirNome(){
        echo self::nome;
    }
}

class Ademir extends Pessoa{
    const nome = "Souza de Almeida";

    public function exibirNome(){
        echo parent::nome;
    }
}

$ademir = new Ademir();
$ademir->exibirNome();