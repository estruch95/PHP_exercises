<?php

//CONVERSIÓN DE ARRAY A JSON - SIRVE PARA PROPORCIONAR INFORMACIÓN A OTRAS APPS

$personas = array("Ivan"=>27, "Oscar"=>20, "Marisa"=>38); 
echo json_encode($personas); //json_encode codifica el array en formato json

?>