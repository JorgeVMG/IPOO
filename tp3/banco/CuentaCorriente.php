<?php
include "cuenta.php";
class CuentaCorriente extends Cuenta{
    private $descubierto;

    public function __construct($vnroCuenta,$vobjCliente,$vsaldo, $descubierto){
        parent::__construct($vnroCuenta,$vobjCliente,$vsaldo);
        $this->descubierto=$descubierto;
    }
    public function getDescubierto(){
        return $this->descubierto;
    }
    public function setDescubierto($descubierto){
        $this->descubierto=$descubierto;
    }
    public function __toString(){

        $cad= parent::__toString();
        $cad.= "\nDescubierto:$".$this->getDescubierto();
        return $cad;
    }
    public function realizarRetiro($monto){
        if(parent::realizarRetiro($monto)){
            $respuesta = true;
        }else{
            $saldoRestante = $this->getSaldo()-$monto;
            if($saldoRestante >= ($this->getDescubierto()*(-1))){
                $this->setSaldo($saldoRestante);
                $respuesta = true;
            }else{
                $respuesta = false;
            } 
        }
        return $respuesta;
    }
}