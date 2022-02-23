<?php

class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->nome = $nome;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getNome(){
        return $this->nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        return $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        return $this->senha = $s;
    }


    public function Logar(){
        if ($this->email == "teste@teste.com.br" and $this->senha == "123456"):
            echo "Logado com sucesso";
        else:
            echo "Dados invalidos";
        endif;
    }

}

$logar = new Login("teste@teste.com.br","123456","Ademir Souza de Almeida");
//$logar->setEmail("teste()//@teste.com.br");
//$logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getNome();
echo "<br";
//echo $logar->getSenha();