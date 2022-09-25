<?php

require_once 'models/pokemon_model.php';

class pokemon_controller{

    public static function mostrar(){

        $pokemon[]= new pokemon(1,"Bulbasaur","Hierba","Veneno","img/bulbasaur.jpg");
        $pokemon[]= new pokemon(2,"Ivysaur","Hierba","Veneno","img/ivysaur.jpg");
        $pokemon[]= new pokemon(3,"Venasaur","Hierba","Veneno","img/venusaur.jpg");
        $pokemon[]= new pokemon(4,"Charmander","Fuego","Ninguno","img/charmander.jpg");
        $pokemon[]= new pokemon(5,"Charmeleon","Fuego","Ninguno","img/charmeleon.jpg");
        $pokemon[]= new pokemon(6,"Charizard","Fuego","Volador","img/charizard.jpg");
        $pokemon[]= new pokemon(7,"Squirtle","Agua","Ninguno","img/squirtle.jpg");
        $pokemon[]= new pokemon(8,"Wartortle","Agua","Ninguno","img/wartortle.jpg");
        $pokemon[]= new pokemon(9,"Blastoise","Agua","Ninguno","img/blastoise.jpg");
        $pokemon[]= new pokemon(10,"Caterpie","Insecto","Ninguno","img/caterpie.jpg");

        return $pokemon;
    }

}