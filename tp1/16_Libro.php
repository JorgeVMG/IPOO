<?php
/**16. Cree una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido
del autor. Defina en la clase los siguientes métodos
a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la
clase.
b) Los método de acceso de cada uno de los atributos de la clase.
c) Método toString() que retorne la información de los atributos de la clase.
f) Cree un script TestLibro que: */
class libro{
    private $ISBN;
    private $titulo;
    private $anioDeEdicion;
    private $editorial;
    private $nombre;
    private $apellido;

    public function __construct($isb,$titulo,$anio,$edit,$nom,$apel){
        $this->ISBN = $isb;
        $this->titulo = $titulo;
        $this->anioDeEdicion = $anio;
        $this->editorial = $edit;
        $this->nombre = $nom;
        $this->apellido = $apel;
    }
    public function getISBN() {
        return $this->ISBN;
    }

    public function setISBN($isb) {
        $this->ISBN = $isb;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAnioDeEdicion() {
        return $this->anioDeEdicion;
    }

    public function setAnioDeEdicion($anio) {
        $this->anioDeEdicion = $anio;
    }

    public function getEditorial() {
        return $this->editorial;
    }

    public function setEditorial($edit) {
        $this->editorial = $edit;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nom) {
        $this->nombre = $nom;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apel) {
        $this->apellido = $apel;
    }
    public function __toString(){
        $inf = "ISBN: ".$this->getISBN()."\nTitulo: ".$this->getTitulo()."\nAño de edición ".$this->getAnioDeEdicion().
        "\nEditorial: ".$this->getEditorial()."\nEl autor es : ".$this->getNombre()." ".$this->getApellido()."\n";
        return $inf;
    }
    /**perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro
    una editorial y devuelve un valor verdadero/falso. */
    public function perteneceEditorial($peditorial){
        if($peditorial == $this->getEditorial()){
            $respuesta = true;
        }else{
            $respuesta = false;
        }
        return $respuesta;
    }
    /** aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado. */
    public function aniosdesdeEdicion(){
        $añosPasados = 2024-$this->getAnioDeEdicion();
        return $añosPasados;
    }
}