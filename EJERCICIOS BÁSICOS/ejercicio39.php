<?php

//ESCRITURA DE ARCHIVO .TXT
//DA ERROR SI NO DISPONEMOS DE PERMISO DE ESCRITURA EN EL DIRECTORIO ACTUAL

$nombreArchivo = "archivo.txt"; //NOMBRE DEL NUEVO ARCHIVO

$contenidoArchivo = "Hola, saludos."; //CONTENIDO DEL ARCHIVO

$archivoAcrear = fopen(nombreArchivo, "w"); //ABRIR ARCHIVO EN MODO ESCRITURA

fwrite($archivoAcrear, $contenidoArchivo); //ESCRITURA EN EL ARCHIVO

fclose($archivoAcrear) //CERRAR EL ARCHIVO 

?>