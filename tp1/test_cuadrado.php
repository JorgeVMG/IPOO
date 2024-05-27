<?php
// Incluir la definición de la clase Cuadrado
include 'Cuadrado.php';

// Crear un objeto Cuadrado
$cuadrado = new Cuadrado([2,2], [4, 2], [4, 4], [2, 4]);

// Imprimir la representación del cuadrado como cadena utilizando el método __toString()
echo $cuadrado;
?>