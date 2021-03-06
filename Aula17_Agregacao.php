<?php

class Produtos{
    public $name;
    public $valor;

    function __construct($name, $valor){
        $this->name = $name;
        $this->valor = $valor;
    }
}

class Carrinho{
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->name."<br>";
            echo $produto->valor."<hr>";

        }
    }
}

$produto1 = new Produtos("Notebook",1500);
$produto2 = new Produtos("Computador",1700);
$produto3 = new Produtos("Mouse",18);
$produto4 = new Produtos("Teclado",35);

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->adiciona($produto4);

$carrinho->exibe();