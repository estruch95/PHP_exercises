<?php

if($_POST){ //Comprobar si se ha introducido valor en el formulario para contemplar valores vacios 

    //RECIBIR INFORMACIÓN DEL FORMULARIO HTML (MÉTODO POST)
    $nombre = $_POST['txtNombre']; //El método $_POST permite leer información en PHP
    echo "Hola ".$nombre;   

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="ejercicio2.php" method="post"> <!-- FORMULARIO CON MÉTODO POST-->
    <input type="text" name="txtNombre" id=""> <!-- CAMPO DE TEXTO -->
    <br/>
    <input type="submit" value="Enviar"> <!-- BOTÓN ENVIAR -->
</form>

</body>
</html>