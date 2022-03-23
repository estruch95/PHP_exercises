<?php

//EN ENVÍO DE ARCHIVOS $_POST SOLO OBTIENE EL NOMBRE PERO NO LA IMAGEN
if($_POST){
    print_r($_FILES);

    echo "<br/><br/>";
    
    print_r("NOMBRE: ".$_FILES['archivo']['name']);
    move_uploaded_file($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']); //OBTENER ARCHIVO Y COPIAR EN EL DIRECTORIO ACTUAL (EJERCICIOS), SI DA ERROR COMPROBAR QUE EL DIRECTORIO ACTUAL TENGA PERMISO DE ESCRITURA

    echo "<br/><br/>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post"><!-- LA PROPIEDAD enctype="multipart/form-data" PERMITE ADJUNTAR ARCHIVOS EN MÉTODO POST -->
    
    Imagen: <input type="file" name="archivo" id="">
    
    
    <br/><br/>
    
    
    <input type="submit" name="enviar" value="Enviar informacion">

    

    </form>
</body>
</html>