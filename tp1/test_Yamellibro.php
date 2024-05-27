<?php
/*f) Cree un script TestLibro que:


3) cree al menos tres objetos libros e invoque a cada uno de los métodos implementados en la clase Libro.*/
    include "libro_Yamel.php";
        function colecciónLibros(){
             $colecLibro=[];
             $colecLibro=[["978-1-56619-909-4", "Harry Potter y la piedra filosofal", 1997, "Salamandra", "J.K.", "Rowling"],
                          ["978-84-204-0586-6", "Cien años de soledad", 1967, "Editorial Sudamericana", "Gabriel García", "Márquez"],
                          ["978-84-397-3299-4", "El nombre del viento", 2007, "Plaza & Janés", "Patrick", "Rothfuss"]];
        return $colecLibro;
  
}
/*1) defina el método iguales($plibro,$parreglo): dada una colección de libros, indica si el libro pasado por 
parámetro ya se encuentra en dicha colección.*/
    function iguales($plibro, $colecLibro){
        $encontrado=0;
        foreach($colecLibro as $i ){
            if($i == $plibro){
                $encontrado=1;
            }
        }
        return $encontrado; 
    }
/*2) defina el método librodeEditoriales($arreglolibros, $peditorial): método que retorna un arreglo asociativo
con todos los libros publicados por la editorial dada.*/
    function libroEditoriales($colecLibro, $peditorial){
        $colecEditorial=[];
        for($i=0; $i<count($colecLibro); $i++){
            if($colecLibro[$i][3]== $peditorial){
                $nuevoPunto=count($colecEditorial);
                $colecEditorial[$nuevoPunto]=$colecLibro[$i];        
            }
        }
        return $colecEditorial;
    }
//
    $colecLibro=colecciónLibros();
    $libro1 = new libro($colecLibro[0][0],$colecLibro[0][1],$colecLibro[0][2],$colecLibro[0][3],$colecLibro[0][4],$colecLibro[0][5]);
    $libro2 = new libro($colecLibro[1][0],$colecLibro[1][1],$colecLibro[1][2],$colecLibro[1][3],$colecLibro[1][4],$colecLibro[1][5]);
    $libro3 = new libro($colecLibro[2][0],$colecLibro[2][1],$colecLibro[2][2],$colecLibro[2][3],$colecLibro[2][4],$colecLibro[2][5]);

    echo $libro1."\n";
    echo"*************************************************************\n";
    echo $libro2."\n";
    echo"*************************************************************\n";
    echo $libro3."\n";
    echo"*************************************************************\n";
    $libro4=["978-84-397-3299-4", "El nombre del viento", 2007, "Plaza & Janés", "Patrick", "Rothfuss"];
    $igual=iguales($libro4, $colecLibro);
    if($igual == 1){
        echo "libro encontrado\n";
    }
    else{
        echo " El libro no exite en la coleccion\n";
    }
    echo"*************************************************************\n";
    $libro4=new Libro($libro4[0],$libro4[1],$libro4[2],$libro4[3],$libro4[4],$libro4[5]);
    $resp=$libro4->perteneceEditorial("Plaza & Janés");
    if ($resp){
        echo "el editorial existe\n";
    }
    else{
        echo "editorial no existe";
    }
    echo"*************************************************************\n";
    $anos=$libro4->anioDesdeEdicion();
    echo "Han pasado ".$anos." años desde su ultima edicion ";
    
    