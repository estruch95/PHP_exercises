<?php

//CONVERSIÓN DE JSON - ARRAY DE OBJETOS

$jsonContenido = '[
    {"nombre":"Ivan", "apellido":"Estruch"},
    {"nombre":"Barbara", "apellido":"Duart"},
    {"nombre":"Maria Pilar", "apellido":"Estruch"}
]';

$resultado = json_decode($jsonContenido); //json_decode es una función PHP que decodifica un JSON en un array de objetos, comprobar estructura del array con print_r()
//print_r($resultado);

//LECTURA DE ARRAY DE OBJETO
foreach($resultado as $persona){
    //print_r($persona->nombre);
    echo ($persona->nombre)." ".$persona->apellido."<br/>";
}

?>
