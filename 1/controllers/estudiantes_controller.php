<?php

require_once "models/estudiantes_model.php";

class estudiantes_controller{

    public static function mostrar(){

        $estudiantes[]= new estudiantes(1,"Carlos","Tapia", rand(0,100));
        $estudiantes[]= new estudiantes(2,"Carlos","Bodoque", rand(0,100));
        $estudiantes[]= new estudiantes(3,"Elza","Patero", rand(0,100));
        $estudiantes[]= new estudiantes(4,"Elbon","Billito", rand(0,100));
        $estudiantes[]= new estudiantes(5,"Aitor","Tilla", rand(0,100));
        $estudiantes[]= new estudiantes(6,"Alba","Sura", rand(0,100));
        $estudiantes[]= new estudiantes(7,"Andres","Trozado", rand(0,100));
        $estudiantes[]= new estudiantes(8,"Elba","Surero", rand(0,100));
        $estudiantes[]= new estudiantes(9,"Helen","Chufe", rand(0,100));
        $estudiantes[]= new estudiantes(10,"Ines","Tornudo", rand(0,100));

        return $estudiantes;

    }

}