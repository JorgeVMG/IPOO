<?php
class calculadora {
    private $numero1;
    private $numero2;
    private $resultado;

    public function __construct($num1,$num2){
        $this->numero1 = $num1;
        $this->numero2 = $num2; 
    }

    public function suma(){
        return $this->numero1 + $this->numero2;
    } 
    public function resta(){
        return $this->numero1-$this->numero2;
    }
    public function multiplicacion(){
        return $this->numero1 * $this->numero2;
    }
    public function division(){
        return $this->numero1 / $this->numero2;
    }
}
//
 echo "ingrese un numero: ";
$num1=trim(fgets(STDIN));
echo "ingrese otro numero:";
$num2=trim(fgets(STDIN));
$calculadora= new calculadora($num1,$num2);
echo "cual de las opcioes desea realizar:\n";
echo "1-suma\n";
echo "2-resta\n";
echo "3-multiplicacion\n";
echo "4-division\n";
echo "ingrese opcion: ";
$opcion=trim(fgets(STDIN));
switch($opcion){
    case 1:
        $resultado=$calculadora->suma($num1,$num2);
        echo " la suma es de ".$resultado;
        break;
    case 2:
        $resultado=$calculadora->resta($num1,$num2);
        echo "la resta es de ".$resultado;
        break;
    case 3:
        $resultado=$calculadora->multiplicacion($num1,$num2);
        echo "la resta es de ".$resultado;
        break;
    case 4:
        $resultado=$calculadora->division($num1,$num2);
        echo "la resta es de ".$resultado;
        break;
}

