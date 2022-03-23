<?php

//LECTURA DE ARCHIVOS .TXT
//ABRIR Y LEER UN ARCHIVO .TXT

$archivo = "contenido.txt"; //ARCHIVO

$archivoAbierto = fopen($archivo, "r"); //fopen ABRIMOS EL ARCHIVO EN MODO LECTURA

$contenido = fread($archivoAbierto, filesize($archivo)); //LEEMOS EL ARCHIVO

echo $contenido; //IMPRIMIR CONTENIDO

?>