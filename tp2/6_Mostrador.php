<?php 
/**Cada mostrador puede atender cierto tipo de trámites y tiene una cola
de clientes, que no puede superar un número determinado para cada cola, de cada cola se conoce el número
actual de personas que hay en ella */
class mostrador{
    private $tipoTramite;
    private $colClientes;
    private $limite;

    public function __construct($tipTra,$colClien,$lim){
        $this->tipoTramite=$tipTra;
        $this->colClientes=$colClien;
        $this->limite=$lim;
    }
    public function getTipoTramite(){
        return $this->tipoTramite;
    }
    public function getColClientes(){
        return $this->colClientes;
    }
    public function getLimites(){
        return $this->limite;
    }
    /**mostrador–>atiende($unTramite): devuelve true o false indicando si el tramite se puede atender o no
     * en el mostrador; note que el tipo de trámite correspondiente a unTramite tiene que coincidir con
     * alguno de los tipos de trámite que atiende el mostrador. */
    public function atiende($unTramite){
        $tiposTrami = $this->getTipoTramite();
        $i=0;
        $respuesta = false;
        while($i<count($tiposTrami)&&$respuesta == false){
            if($tiposTrami[$i]==$unTramite){
                $respuesta = true;
            }else{
                $i++;
            }  
        }
        return $respuesta;
    }
}
