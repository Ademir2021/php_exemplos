<?php

class Pessoa{
public $nome;
public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade. " de Idade "," Acabou de falar ","<br>";
    }
}

$ademir = new Pessoa();

$ademir->nome = "Ademir Souza de Almeida";
$ademir->idade = 47;
$ademir->Falar();

var_dump($ademir);

echo $ademir->nome;
echo $ademir->idade;
echo $ademir->Falar();