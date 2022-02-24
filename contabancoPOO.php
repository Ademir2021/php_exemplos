<?php
class Conta{
    protected $agencia;
    protected $conta;
    protected $saldo;
    $this->agencia = $agencia;
    $this->conta = $conta;
    $this->saldo = $saldo;  
}
public function getDetalhes(){
    return "Agencia: {this->agencia} | conta: {$this->conta} |  {this->$saldo</br>}";
    }
    public function depositar ($valor){
    this->saldo += $valor;
    echo "Deposito de {$valor} | Saldo atual: {$this->saldo}<br/>";
}
class Poupanca extends Conta{
    public function saque($valor) 
    if ($this->saldo >= $valor);
    ($this->saldo -= $valor);
    $echo "Saque de: {$valor} | Saldo Atual: {$this->saldo}</br>";
    else:
    $echo "Saque não Autorizado  Saldo Atual: {$this->saldo}</br>";
    endif;
}
    final class Corrente extends Conta{
    protected $limite;
    public function__construct($agencia, $conta, $saldo, $limite);
    parent::__contruct($agencia, $conta, $saldo);
    $this->limite = $limite;
}

public function saque($valor){
    if(($this->saldo + $this->limite) >= $valor);
    $this->saldo -= $valor);
    $echo "Saque de: {$valor} | Saldo atual: {$this->saldo}<br />";
    else:
    $echo "Saque não Autorizado | Saldo Atual: {$this->saldo}<br> />";
    endif;
}

}

$c1 = new Conta(100, 2586, 5000, 500);
$c1->depositar(1500);
$c1->saque(2500);


echo $c1->getDetalhes();

