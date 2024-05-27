<?php
include "11_cuadrado.php";
$p1 = [2,2];
$p2 = [2,4];
$p3 = [4,4];
$p4 = [4,2];
$cuadrado = new cuadrado($p1,$p2,$p3,$p4);
echo "los puntos son:". $cuadrado."\n";
$area = $cuadrado->area();
echo "el area del cuadrado es: ".$area."cm2\n";
$cuadrado->desplazar([0,2]);
echo "la nueva posicion del cuadrado es:".$cuadrado."\n";
$aumento=2;
$cuadrado->aumentarTamaño($aumento);
echo "Aumentando ".$aumento." el nuevo cuadrado seria: ".$cuadrado."\n";