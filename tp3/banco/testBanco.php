<?php
include "cliente.php";
include_once "persona.php";
include "cuentaCorriente.php";
include_once "cuenta.php";
include_once "cajaAhorro.php";
include "banco.php";
$colCuentas=[];
$ultValor=0;
$colCliente=[];
$objBanco=new Banco($colCuentas,$ultValor, $colCliente);
$objCliente1=new Cliente(1234, "juan", "gonzalez", 1);
$objCliente2=new Cliente(4321, "luis", "hernandez", 2);
$rep = $objBanco->incorporarCliente($objCliente1);
if($rep){
    echo "El cliente fue ingresado\n";
}else{
    echo "El cliente ya existe en el Banco\n";
}
$rep = $objBanco->incorporarCliente($objCliente2);
if($rep){
    echo "El cliente fue ingresado\n";
}else{
    echo "El cliente ya existe en el Banco\n";
}
$rep = $objBanco->incorporarCuentaCorriente(1,200);
if($rep){
    echo "Ya fue ingresado la nueva cuenta corriente al cliente: 1\n";
}
$rep = $objBanco->incorporarCuentaCorriente(2,300);
if($rep){
    echo "Ya fue ingresado la nueva cuenta corriente al cliente: 2\n";
}
$rep = $objBanco->incorporarCajaAhorro(1);
if($rep){
    echo "Ya fue ingresado la nueva caja de Ahorro al cliente: 1\n";
}
$rep = $objBanco->incorporarCajaAhorro(1);
if($rep){
    echo "Ya fue ingresado la nueva caja de Ahorro al cliente: 1\n";
}
$rep = $objBanco->incorporarCajaAhorro(2);
if($rep){
    echo "Ya fue ingresado la nueva caja de Ahorro al cliente: 2\n";
}
$rep = $objBanco->realizarRetiro(3, 200);
if($rep){
    if($objBanco->realizarDeposito(5,$rep)){
        echo "se retiro exitosamente la tranferencia deseada\n";
    }
}else{
    echo "no se puedo realizar\n";
}
echo $objBanco;