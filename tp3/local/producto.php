<?php
include "Rubro.php";
class Producto{
    private $codigoBarra;
    private $descripcion;
    private $stock;
    private $porcentajeIVA;
    private $precio;
    private $objRubro;

    public function __construct($codBarra,$descrip,$sto,$porIVA,$prec,$objRu){
        $this->codigoBarra = $codBarra;
        $this->descripcion = $descrip;
        $this->stock = $sto;
        $this->porcentajeIVA = $porIVA;
        $this->precio = $prec;
        $this->objRubro = $objRu;
    }
    public function getCodigoBarra() {
        return $this->codigoBarra;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getPorcentajeIVA() {
        return $this->porcentajeIVA;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getObjRubro() {
        return $this->objRubro;
    }
    public function setCodigoBarra($codBarra) {
        $this->codigoBarra = $codBarra;
    }

    public function setDescripcion($descrip) {
        $this->descripcion = $descrip;
    }

    public function setStock($sto) {
        $this->stock = $sto;
    }

    public function setPorcentajeIVA($porIVA) {
        $this->porcentajeIVA = $porIVA;
    }

    public function setPrecio($prec) {
        $this->precio = $prec;
    }

    public function setObjRubro($objRu) {
        $this->objRubro = $objRu;
    }
    public function __toString(){
        return "Codigo De Barras: ".$this->getCodigoBarra()."\nDescripcion: ".$this->getDescripcion()."\nStock: ".$this->getStock().
        "\nPorcentaje: ".$this->getPorcentajeIVA()."\nPrecio De Compra: ".$this->getPrecio()."\nRubro: ".$this->getObjRubro();
    }
    public function darPrecioVenta(){
        $porcentajeGanancia = ($this->getPrecio()*$this->getObjRubro()->getPorcentajeGanancia())/100; 
        $porcentajeIva = ($this->getPrecio()*$this->porcentajeIVA)/100;
        $precioVenta = $this->getPrecio()+$porcentajeGanancia+$porcentajeIva;
        return $precioVenta;
    }
}