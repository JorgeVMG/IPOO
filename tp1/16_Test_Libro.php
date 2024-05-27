<?php
/**1) defina el método iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por 
parámetro ya se encuentra en dicha colección.
2) defina el método librodeEditoriales($arreglolibros, $peditorial): método que retorna un arreglo asociativo
con todos los libros publicados por la editorial dada.
3) cree al menos tres objetos libros e invoque a cada uno de los métodos implementados en la clase Libro. */
function iguales($plibro,$parreglo){
    $encontrado = 0;
    foreach ($parreglo as $arreglo) {
        if ($arreglo === $plibro) {
            $encontrado = 1;
        }
    }
    return $encontrado;
}
function librodeEditoriales($arreglolibros, $peditorial){
    $iguales = [];
    for($i=0;$i<count($arreglolibros);$i++){
        if(in_array($peditorial,$arreglolibros[$i])){
            $np=count($iguales);
            $iguales[$np]=$i;
        }
    }
    return $iguales;
}
include "16_Libro.php";
$colDeLibros = [$libro1,$libro2,$libro3];
$colDeLibros[0]=["978-1-56619-909-4", "Harry Potter y la piedra filosofal", 1997, "Salamandra", "J.K.", "Rowling"];
$colDeLibros[1]=["978-84-204-0586-6", "Cien años de soledad", 1967, "Editorial Sudamericana", "Gabriel García", "Márquez"];
$colDeLibros[2]=["978-84-397-3299-4", "El nombre del viento", 2007, "Plaza & Janés", "Patrick", "Rothfuss"];
$libro1 = new libro($colDeLibros[0][0],$colDeLibros[0][1],$colDeLibros[0][2],$colDeLibros[0][3],$colDeLibros[0][4],$colDeLibros[0][5]);
$libro2 = new libro($colDeLibros[1][0],$colDeLibros[1][1],$colDeLibros[1][2],$colDeLibros[1][3],$colDeLibros[1][4],$colDeLibros[1][5]);
$libro3 = new libro($colDeLibros[2][0],$colDeLibros[2][1],$colDeLibros[2][2],$colDeLibros[2][3],$colDeLibros[2][4],$colDeLibros[2][5]);

echo "--------------------------------\n";
echo "Libro 1:\n";
echo $libro1;
echo "--------------------------------\n";
echo "Libro 2:\n";
echo $libro2;
echo "--------------------------------\n";
echo "Libro 3:\n";
echo $libro3;
echo "--------------------------------\n";
$resp=$libro1->perteneceEditorial("Editorial Sudamericana");
if($resp){
    echo "El libro 1 pertenece a esta editorial\n";
}else{
    echo "El libro 1 no pertenece a esta editorial\n";
}
echo "--------------------------------\n";
$resp=$libro2->perteneceEditorial("Editorial Sudamericana");
if($resp){
    echo "El libro 2 pertenece a esta editorial\n";
}else{
    echo "El libro 2 no pertenece a esta editorial\n";
}
echo "--------------------------------\n";
$resp=$libro3->perteneceEditorial("Plaza & Janés");
if($resp){
    echo "El libro 3 pertenece a esta editorial\n";
}else{
    echo "El libro 3 no pertenece a esta editorial\n";
}
echo "--------------------------------\n";
$libro4=["978-84-397-3299-4", "El nombre del viento", 2007, "Plaza & Janés", "Patrick", "Rothfuss"];
$resp = iguales($libro4,$colDeLibros);
if($resp == 1){
    echo "ya existe una copia\n";
}else{
    echo "no existe una copia\n";
}
echo "--------------------------------\n";
$editIgual=librodeEditoriales($colDeLibros, "Salamandra");
echo "hay :".count($editIgual)."libros echos por la misma editorial\n";