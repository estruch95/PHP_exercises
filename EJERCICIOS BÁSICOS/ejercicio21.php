<?php

//ARRAYS O ARREGLOS EN PHP
//ARRAY CON ÍNDICES NUMÉRICOS

$frutas = array("Manzana", "Pera", "Naranja", "Fresa");

print_r($frutas); 
echo "<br/><br/>";

/*
echo $frutas[0]."<br/>";
echo $frutas[1]."<br/>";
echo $frutas[2]."<br/>";
echo $frutas[3]."<br/>";
*/

echo count($frutas); //Cuenta los elementos de un array

//LECTURA DE ARRAY CON ÍNDICES NUMÉRICOS
for($i=0;$i < count($frutas); $i++){
    echo $frutas[$i]."<br/>";
}

?>