<?php
class Rubro{
    private $descripcion;
    private $porcentajeGanancia;

    public function __construct($desc,$porcGan){
        $this->descripcion = $desc;
        $this->porcentajeGanancia = $porcGan;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function getPorcentajeGanancia(){
        return $this->porcentajeGanancia;
    }
    public function setDescripcion($desc){
        $this->descripcion = $desc;
    }
    public function setPorcentajeGanacia($porcGan){
        $this->porcentajeGanancia = $porcGan;
    }

    public function __toString(){
        return "Descripcion: ".$this->getDescripcion()."\nPorcentaje de Ganancia: ".$this->getPorcentajeGanancia();
    }
}