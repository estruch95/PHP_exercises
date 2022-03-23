<!-- FUNCION REQUIRE PHP | SI NO EXISTE O TIENE ERRORES NO SIGUE LA EJECUCIÓN DEL PROGRAMA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require_once "ejercicio37_1.php"; ?> <!-- require_once: en caso de haber 2 require iguales solo se ejecuta uno, usar siempre y ya está = en include_once -->
<?php //require "ejercicio37_1.php"; ?>
<?php //require "ejercicio37_1.php"; ?>
<?php echo "<br/> Hola estoy en la página principal"; ?>
    
</body>
</html>