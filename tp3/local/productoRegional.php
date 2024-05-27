<?php
include "producto.php";
class ProductoRegional extends Producto{
    private $descuento;
    public function __construct($codBarra,$descrip,$sto,$porIVA,$prec,$objRu,$descu){
        parent::__construct($codBarra,$descrip,$sto,$porIVA,$prec,$objRu);
        $this->descuento = $descu;
    }
    public function getDescuento(){
        return $this->descuento;
    }
    public function setDescuento($descu){
        $this->descuento = $descu;
    }
    public function __toString(){
        $cad = parent:: __toString();
        $cad .= "Descuento: ".$this->getDescuento();
    }
    public function darPrecioVenta(){
        $precioVenta = parent:: darPrecioVenta();
        $precioDescuento = ($precioVenta*$this->getDescuento())/100;
        $precioFinal = $precioVenta - $precioDescuento;
        return $precioFinal;
    }
} 