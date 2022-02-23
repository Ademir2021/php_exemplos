<?php

class NewsLetter{
    public function cadastrarEmail($email){

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
            throw new Exception("Este email é invalido", 1);
        else:
            echo "Email cadastrado com sucesso";
        endif;
    }
}

$newsLetter = new NewsLetter();

try {
$newsLetter->cadastrarEmail("contato@uol.com//");
} catch(Exception $e){
    echo " Mensagem: ".$e->getMessage()."<br>";
    echo " Codigo: ".$e->getCode()."<br>";
    echo " Linha: ".$e->getLine()."<br>";
    echo " Arquivo: ".$e->getFile()."<br>";

}