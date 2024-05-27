<?php
include "12_Linea.php";
$linea = new linea(2,2,4,2);
echo $linea."\n";
$linea->mueveDerecha(4);
echo $linea."\n";
$linea->mueveIzquierda(4);
echo $linea."\n";
$linea->mueveArriba(6);
echo $linea."\n";
$linea->mueveAbajo(6);
echo $linea."\n";