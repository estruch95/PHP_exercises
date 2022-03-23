<?php

//CONEXIÓN CON BD

$servidor = "localhost"; //127.0.0.1
$db = "album";
$user = "root";
$password = "";

//TRY-CATCH PARA CAPTURAR EL ERROR EN CASO DE NO PODER CONECTAR CON LA BD
try {
    
    $conexion = new PDO("mysql:host=$servidor;dbname=$db", $user, $password); //PDO es una librería para conectar con la BD
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Hacemos uso de el método setAttribute de PDO
    echo "Conexión establecida con BD <br/><br/>";

    //LECTURA DE BD MEDIANTE PDO
    $sql = "SELECT * FROM fotos";
    $sentencia = $conexion->prepare($sql); //LA SQL SE PREPARA EN UNA SENTENCIA
    $sentencia->execute(); //execute EJECUTA LA SENTENCIA
    $resultado = $sentencia->fetchAll(); //CONFIGURAMOS COMO QUEREMOS QUE NOS DEVUELVA LOS DATOS

    //print_r($resultado); //DEVUELVE 1 SI SE LEEN DATOS

    foreach ($resultado as $foto) { //LECTURA DE CADA FILA DE DATOS CON FOREACH
        
        echo "nombre: ".$foto['nombre']. ", ruta: ".$foto['ruta']."<br/>";
        
    }


} catch (PDOException $error) {
    echo "Conexión errónea con BD: ".$error." <br/>" ;
}


?>
