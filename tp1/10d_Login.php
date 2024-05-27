<?php
class login{
    private $usuario;
    private $contrasenia;
    private $fraseRecordarContrasenia;
    private $ultimasContrasenias;
    
    public function __construct($usua,$contr,$fras){
        $this->usuario = $usua;
        $this->contrasenia = $contr;
        $this->fraseRecordarContrasenia = $fras;
        $this->ultimasContrasenias[] = $contr;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getContrasenia(){
        return $this->contrasenia;
    }
    public function getFrase(){
        return $this->fraseRecordarContrasenia;
    }
    public function getUltimasContrasenias(){
        return $this->ultimasContrasenias;
    }
    public function setUsuario($usua){
        $this->usuario = $usua;
    }
    public function setContrasenia($contr){
        $this->contrasenia = $contr;
    }
    public function setFrase($fras){
        $this->fraseRecordarContrasenia = $fras;
    }
    public function setUltimasContrasenias($contr){
        $this->ultimasContrasenias[] = $contr; 
    }
    public function validarContrasenia($unaContra){
        $respuesta = false;
        if($unaContra == $this->getContrasenia()){
            $respuesta = true;
        }
        return $respuesta;
    }
    public function validarNuevaContrasenia($nuevaContra){
        $respues = false;
        if (!in_array($nuevaContra,$this->getUltimasContrasenias())){
            $this->setContrasenia($nuevaContra);
            $contrasenias = $this->getUltimasContrasenias();
            $contrasenias[3]=$contrasenias[2];
            $contrasenias[2]=$contrasenias[1];
            $contrasenias[1]=$contrasenias[0];
            $contrasenias[0] = $nuevaContra;
            $this->setUltimasContrasenias($contrasenias);
            $respues = true;
        }
        return $respues;
    }
    public function validarUsuario($nomUsua){
        if( $this->getUsuario()==$nomUsua){
            $fras=$this->getFrase();
        }else{
            $fras=-1;
        }
        return $fras;
    }
}