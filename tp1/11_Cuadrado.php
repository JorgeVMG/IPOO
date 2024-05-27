<?php
class cuadrado{
    private $punto1;
    private $punto2;
    private $punto3;
    private $punto4;
    
    public function __construct($p1,$p2,$p3,$p4){
        $this->punto1=$p1;
        $this->punto2=$p2;
        $this->punto3=$p3;
        $this->punto4=$p4;
    }

    public function getPunto1(){
        return $this->punto1;
    }
    public function setPunto1($p1){
        $this->punto1=$p1;
    }
    public function getPunto2(){
        return $this->punto2;
    }
    public function setPunto2($p2){
        $this->punto2=$p2;
    }
    public function getPunto3(){
        return $this->punto3;
    }
    public function setPunto3($p3){
        $this->punto3=$p3;
    }
    public function getPunto4(){
        return $this->punto4;
    }
    public function setPunto4($p4){
        $this->punto4=$p4;
    }
    public function area(){
        $puntoA=$this->getPunto1();
        $puntoB=$this->getPunto2();
        $lado1= sqrt(pow( ($puntoB[0]-$puntoA[0]), 2) + pow(($puntoB[1]- $puntoA[1]), 2) );
        $area= pow($lado1, 2);
        return $area;
    }
    public function desplazar($d){
        $puntoA=$this->getPunto1();
        $puntoB=$this->getPunto2();
        $DistanciaAB= sqrt(pow( ($puntoB[0]-$puntoA[0]), 2) + pow(($puntoB[1]- $puntoA[1]), 2) );   
        $nuevaPosicionP1=$d;
        $nuevaPosicionP2[0]=$d[0];
        $nuevaPosicionP2[1]=$nuevaPosicionP1[1]+$DistanciaAB;
        $nuevaPosicionP3[0]=$nuevaPosicionP1[0]+$DistanciaAB;
        $nuevaPosicionP3[1]=$nuevaPosicionP1[1]+$DistanciaAB;
        $nuevaPosicionP4[0]=$nuevaPosicionP1[0]+$DistanciaAB;
        $nuevaPosicionP4[1]=$d[1];
        $this->setPunto1($nuevaPosicionP1);
        $this->setPunto2($nuevaPosicionP2);
        $this->setPunto3($nuevaPosicionP3);
        $this->setPunto4($nuevaPosicionP4);
    }
    public function aumentarTamaño($t) {
        // Calcular el incremento para cada coordenada
        $incremento = $t / 2;
    
        // Obtener los puntos actuales del cuadrado
        $punto1 = $this->getPunto1();
        $punto2 = $this->getPunto2();
        $punto3 = $this->getPunto3();
        $punto4 = $this->getPunto4();
        
        // Calcular los nuevos puntos con el incremento
        $nuevoPunto1 = [$punto1[0] - $incremento, $punto1[1] - $incremento];
        $nuevoPunto2 = [$punto2[0] - $incremento, $punto2[1] + $incremento];
        $nuevoPunto3 = [$punto3[0] + $incremento, $punto3[1] + $incremento];
        $nuevoPunto4 = [$punto4[0] + $incremento, $punto4[1] - $incremento];
        
        // Actualizar los puntos del cuadrado con los nuevos puntos
        $this->setPunto1($nuevoPunto1);
        $this->setPunto2($nuevoPunto2);
        $this->setPunto3($nuevoPunto3);
        $this->setPunto4($nuevoPunto4);
    }
    public function __toString(){
        return "Punto1: (".$this->getPunto1()[0].",".$this->getPunto1()[1].")".
        "Punto2: (".$this->getPunto2()[0].",".$this->getPunto2()[1].")".
        "Punto3: (".$this->getPunto3()[0].",".$this->getPunto3()[1].")".
        "Punto4: (".$this->getPunto4()[0].",".$this->getPunto4()[1].")";
    }
}