<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //OPERADORES LÓGICOS && y || (DEBEN CUMPLIRSE TODAS LAS CONDICIONES), || (CON QUE SE CUMPLA UNA CONDICIÓN SUFICIENTE)

    if(($valorA != $valorB) || ($valorA > $valorB)){
        echo "El valor A es diferente que el valor B y también es mayor. <br/>";
    } 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
<form action="ejercicio10.php" method="post">

Valor A: <input type="text" name="valorA" id="">
<br/>
Valor B: <input type="text" name="valorB" id="">
<br/><br/>

<input type="submit" value="Calcular">

</form>

</body>
</html>