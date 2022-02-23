<?php

interface Crud{
    public function create($date);
    public function read();
    public function update();
    public function delete();

}

class Noticias implements Crud {
    public function create($date){
        //logica
    }

    public function read(){
        //Logica
    }

    public function update(){
        //logica
    }

    public function delete(){
        //logica
    }
}