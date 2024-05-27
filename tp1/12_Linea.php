<?php
class linea{
    private $pA;
    private $pB;
    private $pC;
    private $pD;

    public function __construct($p1,$p2,$p3,$p4){
        $this->pA=$p1;
        $this->pB=$p2;
        $this->pC=$p3;
        $this->pD=$p4;
    }
    public function getPuntoA(){
        return $this->pA;
    }
    public function setPuntoA($p1){
        $this->pA=$p1;
    }
    public function getPuntoB(){
        return $this->pB;
    }
    public function setPuntoB($p2){
        $this->pB=$p2;
    }
    public function getPuntoC(){
        return $this->pC;
    }
    public function setPuntoC($p3){
        $this->pC=$p3;
    }
    public function getPuntoD(){
        return $this->pD;
    }
    public function setPuntoD($p1){
        $this->pD=$p1;
    }
    public function mueveDerecha($d){
        $derechaX1=$this->getPuntoA()+$d;
        $derechaX2=$this->getPuntoC()+$d;
        $this->setPuntoA($derechaX1);
        $this->setPuntoC($derechaX2);
    }
    public function mueveIzquierda($d){
        $izquierdaX1=$this->getPuntoA()-$d;
        $izquierdaX2=$this->getPuntoC()-$d;
        $this->setPuntoA($izquierdaX1);
        $this->setPuntoC($izquierdaX2);
    }
    public function mueveArriba($d){
        $arribaY1=$this->getPuntoB()+$d;
        $arribaY2=$this->getPuntoD()+$d;
        $this->setPuntoB($arribaY1);
        $this->setPuntoD($arribaY2);
    }
    public function mueveAbajo($d){
        $abajoY1=$this->getPuntoB()-$d;
        $abajoY2=$this->getPuntoD()-$d;
        $this->setPuntoB($abajoY1);
        $this->setPuntoD($abajoY2);
    }
    public function __toString(){
        return "los puntos son: Punto1(".$this->getPuntoA().",".$this->getPuntoB().") y Punto2(".$this->getPuntoC().",".$this->getPuntoD().")";
    }
}