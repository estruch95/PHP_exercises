<?php

//CLASE - POO

class Persona {

    private $nombre; //ENCAPSULAMIENTO O VISIBILIDAD DE VARIABLES DE CLASE - PUBLIC: ACCESIBLES DESDE FUERA DE LA CLASE, PRIVATE: NO ACCESIBLES DESDE FUERA DE LA CLASE
    private $apellido;
    public $sexo;
    protected $altura; //SOLO SE PUEDE ACCEDER DESDE LA MISMA CLASE Y LAS CLASES HEREDADAS

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function printNombre(){
        echo "Hola, soy ".$this->nombre."<br/>";
    }

}


$alumno1 = new Persona(); //CREACIÓN DE INSTANCIA DE CLASE
$alumno1->setNombre("Ricardo"); //LLAMADA A MÉTODO DE CLASE
echo $alumno1->getNombre()."<br/>"; //LLAMADA AL MÉTODO DE CLASE
echo $alumno1->printNombre();

echo "<br/><br/>";

$alumno2 = new Persona();
$alumno2->setNombre("Pepe Juan");
echo $alumno2->getNombre()."<br/>";
echo $alumno2->printNombre();
?>