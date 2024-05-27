<?php
/**Crea una clase CuentaBancaria con los siguientes atributos: número de cuenta, el DNI del cliente, el
saldo actual y el interés anual que se aplica a la cuenta */
class cuentaBancaria{
    private $numeroDeCuenta;
    private $DNI;
    private $saldoActual;
    private $interesAnual;

    public function __construct($numCuenta,$dni,$salAct,$intAnual){
        $this->numeroDeCuenta= $numCuenta;
        $this->DNI=$dni;
        $this->saldoActual = $salAct;
        $this->interesAnual = $intAnual;
    }
    public function getNumeroDeCuenta(){
        return $this->numeroDeCuenta;
    }
    public function setNumeroDeCuenta($numCuenta){
        $this->numeroDeCuenta= $numCuenta;
    }
    public function getDNI(){
        return $this->DNI;
    }
    public function setDNI($dni){
        $this->DNI=$dni;
    }
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function setSaldoActual($salAct){
        $this->saldoActual = $salAct;
    }
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    public function setInteresAnual($intAnual){
        $this->interesAnual = $intAnual;
    }
    /**. actualizarSaldo(): actualizará el saldo de la cuenta aplicándole el interés diario (interés anual
    dividido entre 365 aplicado al saldo actual).*/
    public function actualizarSaldo(){
        $interesDiario= $this->getInteresAnual()/365;
        $interesAcumulado= $this->getSaldoActual()*$interesDiario;
        $nuevoSaldo=$this->getSaldoActual()+$interesAcumulado;
        $this->setSaldoActual($nuevoSaldo);
        return $this->getSaldoActual();
    }
    /**depositar($cant): permitirá ingresar una cantidad de dinero en la cuenta */
    public function depositar($cant){
        $nuevoSaldo = $this->getSaldoActual()+$cant;
        $this->setSaldoActual($nuevoSaldo);
        return $this->getSaldoActual();
    }
    /** retirar($cant): permitirá sacar una cantidad de dinero de la cuenta (si hay saldo). */
    public function retirar($cant){
        if($cant<=$this->getSaldoActual()){
            $retiro = $cant;
            $sobrante = $this->getSaldoActual()-$cant;
        }else{
            $retiro = -1;
        }
        $this->setSaldoActual($sobrante);
        $final = [$retiro,$this->getSaldoActual()];
        return $final;
    }
    /**Redefinir el método _ _toString() para que retorne la información de los atributos de la clase */
    public function __toString(){
        $info = "Numero de cuenta :".$this->getNumeroDeCuenta()."\nDNI: ".$this->getDNI()."\nSaldo actual: ".$this->getSaldoActual()."$\nInteres Anual: ".$this->getInteresAnual()."%\n";
        return $info;
    }
}