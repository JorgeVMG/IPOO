<?php
include "producto.php";
class ProductoImportado extends Producto{
    private $porcentajeIncremento;
    private $porcentajeImpuesto;
    public function __construct($codBarra,$descrip,$sto,$porIVA,$prec,$objRu,$porcIncr,$porcImp){
        parent::__construct($codBarra,$descrip,$sto,$porIVA,$prec,$objRu);
        $this->porcentajeIncremento = $porcIncr;
        $this->porcentajeImpuesto = $porcImp;
    } 
    public function getPorcentajeIncremento() {
        return $this->porcentajeIncremento;
    }
    public function getPorcentajeImpuesto() {
        return $this->porcentajeImpuesto;
    }
    public function setPorcentajeIncremento($porcIncr) {
        $this->porcentajeIncremento = $porcIncr;
    }
    public function setPorcentajeImpuesto($porcImp) {
        $this->porcentajeImpuesto = $porcImp;
    }
    public function __toString(){
        $cad = parent::__toString();
        $cad .= "Porcentaje de Incremento: ".$this->getPorcentajeIncremento()."\nPorcentaje de Impuesto: ".$this->getPorcentajeImpuesto();
    }
    public function darPrecioVenta(){
        $precioVenta = parent:: darPrecioVenta();
        $precioIncremento = ($precioVenta*$this->getPorcentajeIncremento())/100;
        $precioImpuesto = ($precioVenta*$this->getPorcentajeImpuesto())/100;
        $precioFinal = $precioVenta + $precioIncremento + $precioImpuesto;
        return $precioFinal;
    }
    
} 