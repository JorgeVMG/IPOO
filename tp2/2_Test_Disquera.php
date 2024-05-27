<?php
/**Crear un script Test_Disquera que cree un objeto Disquera e invoque a cada uno de los métodos
implementados. */
include "2_Disquera.php";
include "1_Persona.php";
$dueño = new persona("jorge","gonzalez","masculino","3433554");
$disquera = new Disquera([8,30],[22,30],"cerrado","AV. Belgrano",$dueño);
echo $disquera;
echo "****************************************************\n";
$resp = $disquera->dentroHorarioAtencion(10,30);
if ($resp){
    echo "la disquera esta abierta\n";
}else{
    echo "la disquera esta cerrada\n";
}

echo "****************************************************\n";
$disquera->abrirDisquera(8,31);
echo $disquera;

echo "****************************************************\n";
$disquera->CerrarDisquera(22,31);
echo $disquera;

echo "****************************************************\n";
