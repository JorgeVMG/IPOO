<?php
 /*6. Cree una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido
del autor. Defina en la clase los siguientes métodos
  */
class Libro{
    private $ISBN;
    private $titulo;
    private $anoEdicion;
    private $editorial;
    private $nombre;
    private $apellido;

/* a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos de la
clase.*/
    public function __construct($isbn, $titu, $anioE, $edito, $nom, $apel){
        $this->ISBN=$isbn;
        $this->titulo=$titu;
        $this->anioDeEdicion=$anioE;
        $this->editorial=$edito;
        $this->nombre=$nom;
        $this->apellido=$apel;
    }
/* b) Los método de acceso de cada uno de los atributos de la clase.*/
public function getISBN() {
    return $this->ISBN;
}
public function setISBN($isbn) {
    $this->ISBN = $isbn;
}

public function getTitulo() {
    return $this->titulo;
}
public function setTitulo($titu) {
    $this->titulo = $titu;
}

public function getAnioDeEdicion() {
    return $this->anioDeEdicion;
}
public function setAnioDeEdicion($anioE) {
    $this->anioDeEdicion = $anioE;
}

public function getEditorial() {
    return $this->editorial;
}
public function setEditorial($edito) {
    $this->editorial = $edito;
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
/*c) Método toString() que retorne la información de los atributos de la clase.*/
 public function __toString(){
    $cad= "ISBN: ".$this->getISBN().
         "\nTitulo: ".$this->getTitulo().
         "\nAnio Edicion: ".$this->getAnioDeEdicion().
         "\nEditorial: ".$this->getEditorial().
         "\nnombre y apellido: ".$this->getNombre().$this->getApellido();
    return $cad;
 }
/*d) perteneceEditorial($peditorial): indica si el libro pertenece a una editorial dada. Recibe como parámetro
 una editorial y devuelve un valor verdadero/falso.*/
 public function perteneceEditorial($peditorial){
    if($this->getEditorial() == $peditorial){
        $resultado=true;
    }
    else{
        $resultado= false;
    }
    return $resultado;
 }
/*e) aniosdesdeEdicion(): método que retorna los años que han pasado desde que el libro fue editado. */
 public function anioDesdeEdicion(){
    $anios=2024-$this->getAnioDeEdicion();
    return $anios;
 }
}