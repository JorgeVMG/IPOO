<?php
include_once "Fecha.php";
$objfecha= new Fecha(29,02,2023);
echo "fecha abreviada: ".$objfecha;
echo "Fecha extendida: ".$objfecha->fechaExtendida()."\n";
echo "----------incremento----------\n";
$nuevaFecha= $objfecha->incrementa_un_dia(2);
echo "Fecha incrementada :".$nuevaFecha."\n";
echo "fecha extendida incrementada: ".$nuevaFecha->fechaExtendida();
