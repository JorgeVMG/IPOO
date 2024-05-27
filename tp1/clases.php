<?php
class calculadora{
    private $numero1;
    private $numero2;

    public function __construct($num1,$num2){
        $this->numero1 = $num1;
        $this->numero2 = $num2;
    }

    public function suma(){
        return $this->numero1 + $this->numero2;    
    }
    public function resta(){
        return $this->numero1 - $this->numero2;    
    }
    public function multiplicacion(){
        return $this->numero1 * $this->numero2;    
    }
    public function division(){
        return $this->numero1 / $this->numero2;    
    }
}
class reloj{
    private $segundos;
    private $minutos;
    private $horas;

    public function puestaACero() {
        $this->segundos = 00; 
        $this->minutos = 00;
        $this->horas = 00;
    }
    public function incremento(){
        $this->segundos ++;
        if($this->segundos == 60){
            $this->segundos = 0;
            $this->minutos++;
            if($this->minutos == 60){
                $this->minutos = 0;
                $this->horas++;
                if($this->horas == 24){
                    $this->horas = 0;
                }
            }   
        }
    }
    public function __toString() {
        return  $this->horas.":". $this->minutos.":". $this->segundos;
    }
}
class Fecha{
    private $dia;
    private $mes;
    private $anio;

    public function __construct($di,$me,$ani){
        $this->dia = $di;
        $this->mes = $me;
        $this->anio = $ani;
    }
    
    public function anioBisiesto(){
        if(($this->anio % 4) == 0){
            $respuesta = true;
        }
        else{
            $respuesta = false;
        }
        return $respuesta;
    }
    public function fechaExtendida(){
        $meses=[
            "Enero","Febrero","Marzo","Abril","Mayo","Junio",
            "Agosto","Septiembre","Octubre","Noviembre","Diciembre"
        ];
        $mesIndicado = $meses[$this->mes-1];
        $fechaExtendida = $this->dia." ". $mesIndicado." ".$this->anio;
        return $fechaExtendida;
    }
}
