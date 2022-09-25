<?php

    class estudiantes {
        private $id, $nombre, $apellido, $clasificaciones, $color;

        public function __construct($id, $nombre, $apellido, $clasificaciones)
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->clasificaciones = $clasificaciones;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setClasificaciones($clasificaciones){
            $this->clasificaciones = $clasificaciones;
        }

        public function getClasificaciones(){
            return $this->clasificaciones;
        }

        public function getColor(){

            if($this->clasificaciones < 61)
                $this->color = "text-danger";
            else if($this->clasificaciones > 60 && $this->clasificaciones <= 70)
                $this->color = "text-warning";
            else if($this->clasificaciones > 70 && $this->clasificaciones <= 80)
                $this->color = "text-secondary";
            else if($this->clasificaciones > 80 && $this->clasificaciones <= 90)
                $this->color = "text-info";
            else if($this->clasificaciones > 90 && $this->clasificaciones <= 100)
                $this->color = "text-success";

            return $this->color;
        }

        public function getNota(){
            if($this->clasificaciones < 61)
                $this->nota = "F";
            else if($this->clasificaciones > 60 && $this->clasificaciones <= 70)
                $this->nota = "D";
            else if($this->clasificaciones > 70 && $this->clasificaciones <= 80)
                $this->nota = "C";
            else if($this->clasificaciones > 80 && $this->clasificaciones <= 90)
                $this->nota = "B";
            else if($this->clasificaciones > 90 && $this->clasificaciones <= 100)
                $this->nota = "A";

            return $this->nota;
        }

    }

?>