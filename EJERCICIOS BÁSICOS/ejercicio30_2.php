<?php

//DESTRUIR VARIABLES DE SESIÓN PHP
//A VECES NECESITAMOS CERRARLAS O VACIARLAS

session_start(); //INICIAMOS SESIÓN
session_destroy(); //DESTRUIMOS LA SESIÓN

if(isset($_SESSION["usuario"])){ //COMPROBAMOS SI LA VARIABLE DE SESIÓN TIENE DATOS
    
    echo "USUARIO: ".$_SESSION["usuario"]." - STATUS: ".$_SESSION["status"]."<br/>";

} else {

    echo "No hay datos de sesion de usuario <br/>";

}

//SI VOLVEMOS A CONSULTAR LOS DATOS DE SESIÓN EN EL EJERCICIO 30 o 30_1 NO LA MOSTRARÁ PUESTO QUE SE HA DESTRUIDO



?>