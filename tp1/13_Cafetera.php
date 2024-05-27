<?php
class cafetera{
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct($capMax, $cantAct){
        $this->capacidadMaxima = $capMax;
        $this->cantidadActual = $cantAct;
    }
    public function getCapacidadMaxima(){
        return $this->capacidadMaxima;
    }
    public function setCapacidadMaxima($capMax){
        $this->capacidadMaxima = $capMax;
    }
    public function getCantidadActual(){
        return $this->cantidadActual;
    }
    public function setCantidadActual($cantAct){
        $this->cantidadActual= $cantAct;
    }
    
    public function llenarCafetera(){
        $this->setCantidadActual($this->getCapacidadMaxima());
    }
    
    public function servirTaza($cantidad){
        if ($this->getCantidadActual()>=$cantidad){
            $sobrante = $this->getCantidadActual()-$cantidad;
            $respuesta = 1;
        }else{
            $respuesta = $this->getCantidadActual()-$cantidad;
            $sobrante = 0;
        }
        $this->setCantidadActual($sobrante);
        return $respuesta;
    }
    public function vaciarCafetera(){
        $this->setCantidadActual(0);
    }
    public function agregarCafe($cantidad){
        if($cantidad<=$this->getCapacidadMaxima()){
            $this->setCantidadActual($cantidad);
            $respusta = 1;
        }else{
            $sobrante = $this->getCapacidadMaxima()-$cantidad;
            $llenar = $cantidad + $sobrante;
            $this->setCantidadActual($llenar);
            $respusta = $sobrante;
        }
        return $respusta;
    }
    public function __toString(){
        return "la capacidad maxima de la cafetera es: ".$this->getCapacidadMaxima()."ml y la cantidad Actual de la misma es de ".$this->getCantidadActual()."ml";
    }
}