<?php
include "14_CuentaBancaria.php";
$cuentaBancaria = new cuentaBancaria(12452,44949357,223000,5);
echo $cuentaBancaria;
$saldoAct=$cuentaBancaria->actualizarSaldo();
echo "saldo actual: ".$saldoAct."\n";
$saldoAct=$cuentaBancaria->depositar(4000);
echo "saldo actual: ".$saldoAct."\n";
$rep = $cuentaBancaria->retirar(3400);
if($rep[0]==-1){
    echo "el retiro no se pudo completar, saldo insuficiente";
}else{
    echo "se retiro: ".$rep[0]."$\n";
    echo "saldo actual: ".$rep[1]."\n";
}
