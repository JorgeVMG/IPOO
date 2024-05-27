<?php
 /*4. Crear un script Test_Persona que cree un objeto Persona e invoque a cada uno de los
métodos implementados.
b) Realizar las modificaciones necesarias en la clase CuentaBancaria (Ejercicio 14 del TP1) para que en
vez de contener como atributo el DNI del dueño de la cuenta tenga una referencia a las clase Persona.  */
include "1_Persona.php";
include "1_CuentaBancaria.php";
 $persona= new Persona("yamel", "lucas", "femenino", "12345");
 $cuentaB= new cuentaBancaria(123,$persona, 1234, 15 );
 echo "Cuenta Bancaria:".$cuentaB;