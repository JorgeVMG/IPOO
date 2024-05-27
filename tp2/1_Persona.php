<?php
/*1. Implementar una clase Persona con los atributos: nombre, apellido, tipo y número de documento.
a) Defina en la clase los siguientes métodos:
*/
    class Persona{
        private $nombre;
        private $apellido;
        private $tipo;
        private $numeorDocumento;
/*1. Método constructor _ _construct() que recibe como parámetros los valores iniciales para los
atributos de la clase.*/
        public function __construct($nomb, $apell, $sexo, $DNI){
            $this->nombre=$nomb;
            $this->apellido=$apell;
            $this->tipo=$sexo;
            $this->numeorDocumento=$DNI;
        }
/*2. Los métodos de acceso de cada uno de los atributos de la clase. */
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nomb){
            $this->nombre = $nomb;
        }
        public function getApellido(){
            return $this->apellido;
        }
        public function setApellido($apell){
            $this->apellido = $apell;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setTipo($sexo){
            $this->tipo = $sexo;
        }
        public function getNumeroDocumento(){
            return $this->numeorDocumento;
        }
        public function setNumeroDocumento($DNI){
            $this->numeorDocumento = $DNI;
        }
    /*3. Redefinir el método _ _toString() para que retorne la información de los atributos de la clase. */
        public function __toString(){
            $cad="Nombre y Apellido: ".$this->getNombre()." ".$this->getApellido().
                 "\nTipo: ".$this->getTipo().
                 "\nNro.Dcocumento: ".$this->getNumeroDocumento();
            return $cad;

        }
    }
