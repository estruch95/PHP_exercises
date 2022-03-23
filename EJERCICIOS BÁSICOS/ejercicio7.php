<?php

//VARIABLE PHP

$edad = 27;

echo $edad."<br/>";

$edad = 40; //Cambiamos el valor de la variable

echo $edad."<br/><br/>";

//------------------------------------------

//CONSTANTE PHP (A DIFERENCIA DE LA VARIABLE SU VALOR NO CAMBIA)

define("NOMBRE", "Ivan");
define("EDAD", 27);

echo NOMBRE."<br/>";
echo EDAD

//NOMBRE = "Pepe"; //Da error, no se puede cambiar el valor de una constante


?>