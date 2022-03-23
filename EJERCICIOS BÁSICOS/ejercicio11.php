<?php

if($_POST){ //Comprobar si hay envío de datos

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma = $valorA+$valorB;
    $resta = $valorA-$valorB;
    $division = $valorA/$valorB;
    $multiplicacion = $valorA*$valorB;
    
    echo "La suma es = ".$suma."<br/>";
    echo "La resta es = ".$resta."<br/>";
    echo "La division es = ".$division."<br/>";
    echo "La multiplicacion es = ".$multiplicacion."<br/><br/>";

    //IF ANIDADOS EN PHP
    
    if($valorA == $valorB){
        echo "El valor de A es igual al valor de B. <br/>";
        
        if($valorA == 4){
            echo "El valor de A es = 4. <br/>";
        }

        if($valorA == 5){
            echo "El valor de A es = 5. <br/>";
        }
    }

    //MISMAS CONDICIONES COMPRIMIDAS EN UN IF
    if(($valorA == $valorB) && ($valorA == 4)){
        echo "El valor de A es = B y es el valor 4. <br/>";
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
    
<form action="ejercicio11.php" method="post">

Valor A: <input type="text" name="valorA" id="">
<br/>
Valor B: <input type="text" name="valorB" id="">
<br/>

<input type="submit" value="Calcular">

</form>

</body>
</html>