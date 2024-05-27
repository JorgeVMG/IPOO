<?php
class Fecha{
     private $dia;
     private $mes;
     private $anio;
//metodos de acceso
     public function __construct($dia, $mes, $anio){
            $this->dia=$dia;
            $this->mes=$mes;
            $this->anio=$anio;
     }

     public function getDia(){
        return $this->dia;
     }
     public function setDia($dia){
        $this->dia=$dia;
     }

     public function getMes(){
        return $this->mes;
     }
     public function setMes($mes){
        $this->mes=$mes;
     }

     public function getAnio(){
        return $this->anio;
     }
     public function setAnio($anio){
        $this->anio=$anio;
     }

     public function AnioBisiesto($anioB){
        $respuesta=false;
        if( ( $anioB % 4) == 0 && (($anioB % 100) !=0 || $anioB %400 ==0 ) ){
            $respuesta= true;
        }
        return $respuesta;   
     }

     public function incrementa_un_dia($dia, $mes, $anio,$diaInc){
        $fDia=$this->getDia();
        $mes=$this->getMes();
        $anio=$this->getAnio();
        $respuesta = anioBisiesto($anio);
        for ($i=0; $i< $diaInc ; $i++){
             if( $mes == 2 && $respuesta == true ){
                if(($fDia+1)< 30){
                    $fDia++; 
                }
                else{
                    $fDia=1;
                    $mes++;
                }
             }
             elseif($mes==2 && $respuesta == false){
                if(($fDia+1)< 29){
                    $fDia++;
                }
                else{
                    $fDia=1;
                    $mes++;
                }
             }
             else{
                 if($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11  ){
                    if(($fDia+1) < 31 ){
                        $fDia++;
                    }
                    else{
                        $fDia=1;
                        $mes++;
                    }
                 }
                 elseif($mes==12 ){
                    if(($fDia +1) <32){
                        $fDia++;
                    }
                    else{
                        $fDia=1;
                        $mes=1;
                        $anio++;

                    }
                 }
                 else{
                    if(($fDia+1) < 32 ){
                        $fDia++;
                    }
                    else{
                        $fDia=1;
                        $mes++;
                    }

                 }

             }

        }
        return $fDia.$mes.$anio;
     }
     public function mes_encontrado($mes){
     $meses=[ 1=>"enero", 2=> "febrero",3=> "marzo", 4=> "abril",5=>"mayo", 6=> "junio",
                 7=> "julio", 8=> "agosto",9=> "septiembre", 10=> "octubre",11=> "noviembre",
                 12 => "diciembre"];   
    return $meses[$mes];
    }
    public function __toString (){

        return ($this->getDia()."/".$this->getMes()."/".$this->getAnio()."\n");
        return ($this->getDia()." de del ".$this->getAnio());
     }

    }
