<?php

class pokemon {
    private $id, $nombre, $tipo1, $tipo2, $img;

    public function __construct($id, $nombre, $tipo1, $tipo2, $img)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->tipo1 = $tipo1;
        $this->tipo2 = $tipo2;
        $this->img = $img;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getTipo1(){
        return $this->tipo1;
    }

    public function setTipo1($tipo1){
        $this->tipo1 = $tipo1;
    }

    public function getTipo2(){
        return $this->tipo2;
    }

    public function setTipo2($tipo2){
        $this->tipo2 = $tipo2;
    }

    public function getImg(){
        return $this->img;
    }

    public function setImg($img){
        $this->img = $img;
    }
}