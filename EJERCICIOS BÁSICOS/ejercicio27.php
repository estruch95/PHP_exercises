<?php

class UnaClase {

    //MÉTODO ESTÁTICO DE CLASE (PUEDE LLAMARSE SIN NECESIDAD DE INSTANCIAR LA CLASE)
    public static function unMetodo(){

        echo "Hola soy un método estático <br/>";

    }

}

/*
$clase = new UnaClase(); //INSTANCIAMOS LA CLASE
$clase->unMetodo(); //PODEMOS LLAMAR AL MÉTODO ESTÁTICO A TRAVÉS DE LA INSTANCIA
*/

UnaClase::unMetodo(); //ACCESO AL MÉTODO ESTÁTICO DE LA CLASE SIN INSTANCIA DE CLASE


?>