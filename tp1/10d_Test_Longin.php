<?php
include "login.php";

$login = new login("juan",23456,"leon");

$r = $login->validarContrasenia(23456);
if($r){
    echo "La contraseña es valida\n";
}else{
    echo "La contraseña es invalida\n";
}
$res = $login->validarNuevaContrasenia(23456);
if($res){
    echo "la contraseña fue cambiada\n";
}else{
    echo "la contraseña ya fue usada, porfavor ingrese otra\n";
}
$fras = $login->validarUsuario("juan");
if($fras == -1){
    echo "el usuario es invalido\n";
}else{
    echo "su frase es:".$fras;
}