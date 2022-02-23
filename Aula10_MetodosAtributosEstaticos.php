<?php

class Login{
    public static $user;

    public static function verificaLogin(){
        echo " O usuario ".self::$user. " está logado ";
    }
}

login::$user = "admin";
login::verificaLogin();