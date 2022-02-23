<?php

class Veiculo {
   protected $modelo;
   public $cor;
   public $ano;

    protected function Andar(){
        echo " Andou ";
    }

    public function MostrarAcao(){
        return $this->Andar();
    }

    public function Parar(){
        echo " Parou ";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }

}

class Carro extends Veiculo{
    public function MostrarAcao(){
        return $this->Andar();
    }

    public function LigarLimpador(){
        echo " Limpador Ligado ";
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }

}

class Moto extends Veiculo{
    public function DarGrau(){
        echo " Girando 360 graus ";
    }
}

/*
$carro = new Carro();
//$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = "2021";
$carro->Andar();
$carro->LigarLimpador();

var_dump($carro);
echo "<br>";
$moto = new Moto();
//$moto->modelo = "Honda";
$moto->cor = "Azul";
$moto->ano = "1980";
$moto->Andar();
$moto->Parar();
$moto->DarGrau();
//var_dump($moto);


$veiculo = new Veiculo();
$veiculo->setModelo("Hiluz");
echo $veiculo->getModelo();
//var_dump($veiculo);


$carro = new Carro();
$carro->setModelo("Hiluz");
echo $carro->getModelo();
var_dump($carro);
*/

$carro = new Carro();
//$veiculo->Andar();
$carro->MostrarAcao();

