<?php
class Venta{
    private $fecha;
    private $referencia;
    private $objCliente;
    private $importeFinal;

    public function __construct($fech,$refe,$objClien,$imporFin){
        $this->fecha = $fech;
        $this->referencia = $refe;
        $this->objCliente = $objClien;
        $this->importeFinal = $imporFin;
    }
    public function getFecha(){
        return $this->fecha;
    }
    public function getReferencia(){
        return $this->referencia;
    }
    public function getObjCliente(){
        return $this->objCliente;
    }
    public function getImporteFinal(){
        return $this->importeFinal;
    }
    public function setFecha($fech){
        $this->fecha = $fech;
    }
    public function setReferencia($refe){
        $this->referencia = $refe;
    }
    public function setObjCliente($objClien){
        $this->objCliente= $objClien;
    }
    public function setImporteFinal($imporFin){
        $this->importeFinal = $imporFin;
    }
    public function __toString(){
        return "Fecha: ".$this->getFecha()."\nReferencia: ".$this->getReferencia()."\nCliente: ".$this->getObjCliente()."\nImporte Final: ".$this->getImporteFinal();
    }
}