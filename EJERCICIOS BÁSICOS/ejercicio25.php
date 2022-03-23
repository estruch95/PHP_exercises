<?php

//CLASES Y HERENCIA DE CLASES - POO

class Persona {

    private $nombre; //ENCAPSULAMIENTO O VISIBILIDAD DE VARIABLES DE CLASE - PUBLIC: ACCESIBLES DESDE FUERA DE LA CLASE, PRIVATE: NO ACCESIBLES DESDE FUERA DE LA CLASE
    private $apellido;
    public $sexo;
    protected $altura; //SOLO SE PUEDE ACCEDER DESDE LA MISMA CLASE Y LAS CLASES HEREDADAS
    
    function __construct($nombre, $apellido, $sexo, $altura){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->sexo = $sexo;
        $this->altura = $altura;
    }
    
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


class Trabajador extends Persona {

    private $empresa;
    private $puesto;
    private $antiguedad;

    function __construct(){

    }

    public function setPuesto($puesto){
        $this->puesto = $puesto;
    }

    public function getPuesto(){
        return $this->puesto;
    }

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->getNombre()." y soy ".$this->puesto."<br/>";
    }

}


$alumno1 = new Persona("Ivan", "Estruch", "H", 173); //CREACIÓN DE INSTANCIA DE CLASE
$alumno1->setNombre("Ricardo"); //LLAMADA A MÉTODO DE CLASE
echo $alumno1->getNombre()."<br/>"; //LLAMADA AL MÉTODO DE CLASE
echo $alumno1->printNombre();

echo "<br/><br/>";

$alumno2 = new Persona("Joan", "Duart", "H", 172);
$alumno2->setNombre("Pepe Juan");
echo $alumno2->getNombre()."<br/>";
echo $alumno2->printNombre();


$trabajador1 = new Trabajador();
$trabajador1->setNombre("Enrique");
$trabajador1->setPuesto("Programador PHP Senior");
echo $trabajador1->getPuesto()."<br/>";
$trabajador1->presentarseComoTrabajador();

?>