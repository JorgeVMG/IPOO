<?php
/**Implementar una clase Disquera con los atributos: hora_desde y hora_hasta (que indican el horario de
atención de la tienda), estado (abierta o cerrada), dirección y dueño. El atributo dueño debe referenciar a un
objeto de la clase Persona implementada en el punto 1. Defina en la clase los siguientes métodos:
*/
class Disquera{
    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $dueño;
    /**Método constructor _ _construct () que recibe como parámetros los valores iniciales para los atributos
    de la clase */
    public function __construct($hrD,$hrH,$est,$direc,$due){
        $this->hora_desde = $hrD;
        $this->hora_hasta = $hrH;
        $this->estado = $est;
        $this->direccion = $direc;
        $this->dueño = $due;
    }
    /**Los métodos de acceso de cada uno de los atributos de la clase. */
    public function getHoraDesde() {
        return $this->hora_desde;
    }

    public function setHoraDesde($hrD) {
        $this->hora_desde = $hrD;
    }

    public function getHoraHasta() {
        return $this->hora_hasta;
    }

    public function setHoraHasta($hrH) {
        $this->hora_hasta = $hrH;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setEstado($est) {
        $this->estado = $est;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direc) {
        $this->direccion = $direc;
    }

    public function getDueño() {
        return $this->dueño;
    }

    public function setDueño($due) {
        $this->dueño = $due;
    }
    /**dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna true si la tienda debe
    encontrarse abierta en ese horario y false en caso contrario. */
    public function dentroHorarioAtencion($hora,$minutos){
        $horaDesde = $this->getHoraDesde();
        $horaHasta = $this->getHoraHasta();
        /**si la hora es mayor a la hora de incio o si la hora es igual a la hora de inicio y los minutos son mayores a los de incio solo es verdad solo si 
         * hora es menor que hora final o es igual a la hora final o si la hora es igual a la hora de final pero los minutos son menores a hora final
         */
        if ($hora > $horaDesde[0]||($hora == $horaDesde[0]&&$minutos >= $horaDesde[1])&&($hora < $horaHasta[0]||($hora == $horaHasta[0]&&$minutos< $horaHasta[1]))){
           $respuesta = true;
        }else{
            $respuesta = false;
        }
        return $respuesta;
    }
    /**abrirDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra dentro del
    horario de atención y cambia el estado de la disquera solo si es un horario válido para su apertura. */
    public function abrirDisquera($hora,$minutos){
        $horaDesde = $this->getHoraDesde();
        $horaHasta = $this->getHoraHasta();
        if (($hora>$horaDesde[0]||($hora==$horaDesde[0]&&$minutos>=$horaDesde[1])&&($hora<$horaHasta[0]||($hora==$horaHasta[0]&&$minutos<$horaHasta[1])))){
            $this->setEstado("abierto");
        }else {
            $this->setEstado("cerrado");
        }
    }
    /**CerrarDisquera($hora,$minutos): que dada una hora y minutos corrobora que se encuentra fuera del
    horario de atención y cambia el estado de la disquera solo si es un horario válido para su cierre. */
    public function CerrarDisquera($hora,$minutos){
        $horaDesde = $this->getHoraDesde();
        $horaHasta = $this->getHoraHasta();
        if (!($hora >= $horaDesde[0] && $hora <= $horaHasta[0] &&($hora !== $horaDesde[0] || $minutos >= $horaDesde[1])&&($hora !== $horaHasta[0] || $minutos <= $horaHasta[1]))) {
            $this->setEstado("cerrado");
        } else {
            $this->setEstado("abierto");
        }
    }
    /**Redefinir el método _ _toString() para que retorne la información de los atributos de la clase. */
    public function __toString(){
        $inf= "Abierto desde ".$this->getHoraDesde()[0].":".$this->getHoraDesde()[1].
        " hasta las ".$this->getHoraHasta()[0].":".$this->getHoraHasta()[1].
        "\nEstado: ".$this->getEstado()."\nDireccion: ".$this->getDireccion().
        "\nDueño:\n".$this->getDueño()."\n";
        return $inf;
    }
}