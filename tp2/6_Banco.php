<?php
/**En un banco existen varios mostradores. Implemente los siguientes métodos:
a) Método constructor _ _construct() que recibe como parámetros los valores iniciales para los atributos
de las clases.
b) Los métodos de acceso de cada uno de los atributos de las clases.
c) Redefinir el método _ _toString() para que retorne la información de los atributos de las clases.
g) banco–>atender($unCliente): cuando llega un cliente al banco se lo ubica en el mostrador que atienda
el trámite que el cliente requiere, que tenga espacio y la menor cantidad de clientes esperando; si no
hay lugar en ningún mostrador debe retornar un mensaje que diga al cliente que “será antendido en
cuanto haya lugar en un mostrador”. */
class banco{
    private $mostradores;

    public function __construct($mostra){
        $this->mostradores=$mostra;
    }
    public function getMostrador(){
        return $this->mostradores;
    }
    /**banco–>mejorMostradorPara($unTramite): retorna el mostrador con la cola más corta con espacio
     * para al menos una persona más y que atienda ese trámite; si ningun mostrador tiene espacio, retorna
     * null. */
    public function mejorMostradorPara($unTramite){
        $colecMostradores = $this->getMostrador();
        $mostraAtienTram = [];
        foreach ($colecMostradores as $axuliar){
            if($axuliar == $unTramite){
                $np = count($mostraAtienTram);
                $mostraAtienTram[$np]= $axuliar;
            }
        }
        
        if (count($colecMostradores)==0){
            $mostraAtienTram = null;
        }
        return $mostraAtienTram;
    }
}