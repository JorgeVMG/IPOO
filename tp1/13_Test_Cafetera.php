<?php
include "13_Cafetera.php";
$cefetera = new cafetera(1000,0);
echo $cefetera."\n";
$cefetera->llenarCafetera();
echo $cefetera."\n";
$rep = $cefetera->servirTaza(1000);
if($rep>=0){
    echo "la taza se sirvio completamente\n";
}else{
    $rep = $rep *(-1);
    echo "la taza no se pudo servir completamente, falto ".$rep."ml de cafe\n";
}
$reps = $cefetera->servirTaza(200);
if($reps>=0){
    echo "la taza se sirvio completamente\n";
}else{
    $reps = $rep *(-1);
    echo "la taza no se pudo servir completamente, falto ".$rep."ml de cafe\n";
}
echo $cefetera."\n";
echo "acontinuacion se vaciara la cafetera\n";
$cefetera->vaciarCafetera();
echo $cefetera."\n";
echo "cafetera vacia\n";
$resp=$cefetera->agregarCafe(2200);
if($resp==1){
    echo $cefetera;
}else{
    echo $cefetera."\n";
    echo "sobrante: ".$resp*(-1);
}