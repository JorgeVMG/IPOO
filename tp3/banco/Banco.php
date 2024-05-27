<?php
include_once "CuentaCorriente.php";
include_once "CajaAhorro.php";
include_once "Cuenta.php";
include_once "Cliente.php";

class Banco{
    private $colecCuentas;
    private $ultValorCuentaAsignado;
    private $coleCliente;

    public function __construct($coleCuentas, $ultValorCuentaAsignado, $coleCliente){
        $this->colecCuentas = $coleCuentas;
        $this->ultValorCuentaAsignado=$ultValorCuentaAsignado;
        $this->coleCliente=$coleCliente;
    }
    public function getColCuentas(){
        return $this->colecCuentas;
    }
    public function getUltValorCuenta(){
        return $this->ultValorCuentaAsignado;
    }
    public function getColeCliente(){
        return $this->coleCliente;
    }
    public function setColCuentas($coleCuentas){
        $this->colecCuentas=$coleCuentas;
    }
    public function setUltValorCuenta($ultValorCuentaAsignado){
        $this->ultValorCuentaAsignado=$ultValorCuentaAsignado;
    }
    public function setColeCliente($coleCliente){
        $this->coleCliente=$coleCliente;
    }

    public function retornarCCorriente(){
        $cad="";
        $colCuentas= $this->getColCuentas();
        foreach($colCuentas as $cCorriente){
            if($cCorriente instanceof CuentaCorriente){
                $cad.="*************************************************\n".$cCorriente."\n";
            }
        }
        return $cad;
    }
    public function retornarCAhorro(){
        $cad="";
        $colCuentas= $this->getColCuentas();
        foreach($colCuentas as $cAhorro){
            if($cAhorro instanceof CajaAhorro){
                $cad.="*************************************************\n".$cAhorro."\n";
            }
        }
        return $cad;
    }

    public function retornarCCliente(){
        $cad="";
        foreach($this->getColeCliente() as $cliente){
            $cad.="*************************************************\n".$cliente."\n";
        }
        return $cad;
    }
    public function __toString(){
        $cad="Coleccion C.Corriente:\n".$this->retornarCCorriente().
            "Coleccion C.Ahorro:\n".$this->retornarCAhorro().
            "Ultimo valor asignado:".$this->getUltValorCuenta().
            "\nColeccion Clientes:\n".$this->retornarCCliente();
        return $cad;
    }

    public function incorporarCliente($objCliente){
        $colecCliente = $this->getColeCliente();
        $i = 0;
        $encontrado = false;
        if(count($colecCliente)>0){
            do{
                if( $colecCliente[$i] == $objCliente){
                    $encontrado = true;
                }  
                $i++;
            }while($i<count($colecCliente) && $encontrado==false);
        }
        if($encontrado == false){
            $j = count($colecCliente);
            $colecCliente[$j] = $objCliente;
            $this->setColeCliente($colecCliente);
            $respuesta = true;
        }else{
            $respuesta = false;
        }
        return $respuesta;
    }

    public function incorporarCuentaCorriente($numCliente,$montoDescubierto){
        $i=0;
        $respuesta = false;
        $colClientes=$this->getColeCliente();
        $coleCorriente= $this->getColCuentas();
        while($i<count($colClientes)&& $respuesta == false){
            if($colClientes[$i]->getNroCliente()==$numCliente){
                $respuesta = true;
                $ultimoValor = $this->getUltValorCuenta()+1;
                $objCuentaCorriente = new CuentaCorriente($ultimoValor,$colClientes[$i],200,$montoDescubierto);
                $this->setUltValorCuenta($ultimoValor);
                $j=count($coleCorriente);
                $coleCorriente[$j]= $objCuentaCorriente;
                $this->setColCuentas($coleCorriente);
            }
            $i++;
        }
        return $respuesta;
    }
    public function incorporarCajaAhorro($numCliente){
        $i=0;
        $respuesta = false;
        $colClientes=$this->getColeCliente();
        $coleAhorro = $this->getColCuentas();
        while($i<count($colClientes)&& $respuesta == false){
            if($colClientes[$i]->getNroCliente()==$numCliente){
                $respuesta = true;
                $ultimoValor = $this->getUltValorCuenta()+1;
                $objCuentaAhorro = new CajaAhorro($ultimoValor,$colClientes[$i],200);
                $this->setUltValorCuenta($ultimoValor);
                $j=count($coleAhorro);
                $coleAhorro[$j]= $objCuentaAhorro;
                $this->setColCuentas($coleAhorro);
            }
            $i++;
        }
        return $respuesta;
    }
    public function realizarDeposito($numCuenta,$monto){
        $i = 0;
        $encontrado = false;
        $colCuentas = $this->getColCuentas();
        while($i<count($colCuentas)&& $encontrado == false){
            if($numCuenta == $colCuentas[$i]->getNroCuenta()){
                $encontrado = true;
                if($colCuentas[$i]->realizarDeposito($monto)){
                    $respuesta = true;
                }else{
                    $respuesta = false;
                }
            }
            $i++;
        }
        return $respuesta;
    }
    public function realizarRetiro($numCuenta, $monto){
        $i = 0;
        $encontrado = false;
        $colCuentas = $this->getColCuentas();
        while($i<count($colCuentas)&& $encontrado == false){
            if($colCuentas[$i]->getNroCuenta() == $numCuenta){
                $encontrado = true;
                if($colCuentas[$i]->realizarRetiro($monto)){
                    $respuesta = true;
                }else{
                    $respuesta = false;
                }
            }
            $i++;
        }
        return $respuesta;
    }
}