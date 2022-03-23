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
    echo "Conexión establecida con BD <br/>";

    //INSERCIÓN EN BD
    $sql = "INSERT INTO fotos (nombre, ruta) VALUES ('El juego del monopoly', 'Monopoly.jpg')";
    $conexion->exec($sql);

} catch (PDOException $error) {
    echo "Conexión errónea con BD: ".$error." <br/>";
}


?>
