<?php
include 'fecha2.php';
$miFecha = new Fecha(31, 12, 2020);
echo $miFecha . "\n";
$miFecha->incremento(5);
echo $miFecha . "\n";
?>