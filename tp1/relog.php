<?php
class persona{
    private $nombre;
    private $apellido;
    private $genero;

    public function __construct($nom, $apel, $gen){
        $this->nombre = $nom;
        $this->apellido = $apel;
        $this->genero = $gen;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getGenero(){
        return $this->genero;
    }
    public function setNombre($nom){
        $this->nombre = $nom;
    }
    public function setApellido($apel){
        $this->nombre = $apel;
    }
    public function setGenero($gen){
        $this->nombre = $gen;
    }
    public function __toString(){
        return $this->getNombre()." ".$this->getApellido()." ".$this->getGenero();
    }
}

