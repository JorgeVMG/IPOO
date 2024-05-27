<?php
class local{
    private $coleProductos;

    public function __construct($colPro){
        $this->coleProductos=$colPro;
    }
    public function getColeProduc(){
        return $this->coleProductos;
    }
    public function setColeProduc($colPro){
    }
}