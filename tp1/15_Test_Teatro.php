<?php
include "15_Teatro.php";
$f1 = ["nombre"=>"la bella y la bestia","precio"=>10000];
$f2 = ["nombre"=>"principito","precio"=>5000];
$f3 = ["nombre"=>"romeo y julieta","precio"=>7000];
$f4 = ["nombre"=>"blancanieves","precio"=>12000];
$teatro = new teatro("La risa y el llanto","AV. Belgrano",$f1,$f2,$f3,$f4);
echo $teatro;
echo "--------------------------------\n";
echo "OTRO TEATRO\n";
echo "--------------------------------\n";
$teatro->cambioDeNombreYDireccion("lagrimas de dios","Av. gorriti");
$teatro->cambiarNombreYPresioFuncion(2,"la casa de papel",15000);
echo $teatro;