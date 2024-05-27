<?php
/**Un teatro se caracteriza por su nombre y su dirección y en él se realizan 4 funciones al día. Cada función tiene
un nombre y un precio. Realice el diseño de la clase Teatro e indique qué métodos tendría que tener la clase,
teniendo en cuenta que se pueda cambiar el nombre del teatro y la dirección, el nombre de un función y el
precio. Implementar las 4 funciones usando array de array asociativo. Cada función es un array asociativo con
las claves “nombre” y “precio”.
 */
class teatro{
    private $nombre;
    private $direccion;
    private $funcion1;
    private $funcion2;
    private $funcion3;
    private $funcion4;
    
    public function __construct($nom,$dire,$f1,$f2,$f3,$f4){
        $this->nombre=$nom;
        $this->direccion=$dire;
        $this->funcion1 =$f1;
        $this->funcion2 =$f2;
        $this->funcion3 =$f3;
        $this->funcion4 =$f4;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nom){
        $this->nombre=$nom;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($dire){
        $this->direccion=$dire;
    }
    public function getFuncion1(){
        return $this->funcion1;
    }
    public function setFuncion1($f1){
        $this->funcion1 = $f1;   
    }
    public function getFuncion2(){
        return $this->funcion2;
    }
    public function setFuncion2($f2){
        $this->funcion2=$f2;  
    }
    public function getFuncion3(){
        return $this->funcion3;
    }
    public function setFuncion3($f3){
        $this->funcion3=$f3;    
    }
    public function getFuncion4(){
        return $this->funcion4;
    }
    public function setFuncion4($f4){
        $this->funcion4=$f4;
    }
    public function cambioDeNombreYDireccion($nuevoNom,$nuevaDire){
        $this->setNombre($nuevoNom);
        $this->setDireccion($nuevaDire);
        $salida = [$this->getNombre(),$this->getDireccion()];
        return $salida;
    }
    public function cambiarNombreYPresioFuncion($fN,$nombreFuncion,$precioFuncion){
        switch($fN){
            case 1:
                $nuevaFuncion=["nombre"=>$nombreFuncion,"precio"=>$precioFuncion];
                $this->setFuncion1($nuevaFuncion);
                break;
            case 2:
                $nuevaFuncion=["nombre"=>$nombreFuncion,"precio"=>$precioFuncion];
                $this->setFuncion2($nuevaFuncion);
                break;
            case 3:
                $nuevaFuncion=["nombre"=>$nombreFuncion,"precio"=>$precioFuncion];
                $this->setFuncion3($nuevaFuncion);
                break;
            case 4:
                $nuevaFuncion=["nombre"=>$nombreFuncion,"precio"=>$precioFuncion];
                $this->setFuncion4($nuevaFuncion);
                break;
        }
    }
    public function __toString(){
        $inf = "el teatro se llama: ".$this->getNombre()." y su direccion es: ".$this->getDireccion()."\nFunciones:
        \n-Funcion1: ".$this->getFuncion1()["nombre"]." y su precio es de ".$this->getFuncion1()["precio"]."$
        \n-Funcion2: ".$this->getFuncion2()["nombre"]." y su precio es de ".$this->getFuncion2()["precio"]."$
        \n-Funcion3: ".$this->getFuncion3()["nombre"]." y su precio es de ".$this->getFuncion3()["precio"]."$
        \n-Funcion4: ".$this->getFuncion4()["nombre"]." y su precio es de ".$this->getFuncion4()["precio"]."$\n";
        return $inf;
    }
}