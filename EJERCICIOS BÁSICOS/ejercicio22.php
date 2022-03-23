<?php

//ARRAYS O ARREGLOS
//ARRAY CON ÍNDICES ASOCIATIVOS

$frutas = array("Nombre" => "Ivan", "Apellido" => "Estruch", "Edad" => 27);

print_r($frutas);

echo "<br/>";

/*
echo $frutas['Nombre']."<br/>";
echo $frutas['Apellido']."<br/>";
echo $frutas['Edad']."<br/>";
*/

//LECTURA DE ARRAY CON ÍNDICES ASOCIATIVOS
foreach($frutas as $indice => &$valor){
    
    echo $frutas[$indice]."<br/>";
    echo $indice." - ".$valor."<br/>";

}


?>