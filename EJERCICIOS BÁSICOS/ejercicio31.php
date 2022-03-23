<?php

//INPUT
$txtNombre = "";

//RADIO
$rdLenguaje = "";

//CHECKBOX
$chkPHP = "";
$chkHTML = "";
$chkCSS = "";

//SELECT
$lsAnime = "";

//TEXT AREA
$txtComentario = "";

if($_POST){ //HAY ENVÍO DE DATOS A TRAVÉS DEL FORMULARIO?

    //COMPROBAR LOS DATOS QUE ME LLEGAN POR MÉTODO $_POST
    
    //print_r($_POST);
    //echo "<br/>"; 
    

    //IF TERNARIO PARA COMPROBAR CON ISSET SI LA VARIABLE ESTÁ DEFINIDA (SI HAY INFORMACIÓN EN EL CAMPO txtNombre) Y NO ES NULL, EN CASO DE QUE NO EXISTA LE ASIGNA UNA CADENA VACIA ""
    //LECTURA DE INPUT
    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre']: "";

    //LECTURA DE RADIO
    $rdLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje']: "";

    //LECTURA DE CHECKBOX
    $chkPHP = (isset($_POST['chkPHP'])=="si") ? "checked": "";
    $chkHTML = (isset($_POST['chkHTML'])=="si") ? "checked": "";
    $chkCSS = (isset($_POST['chkCSS'])=="si") ? "checked": "";

    //LECTURA DE SELECT
    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime']: "";
    //print_r($lsAnime);

    //LECTURA DE TEXT AREA
    $txtComentario = (isset($_POST['txtComentario'])) ? $_POST['txtComentario']: "";
    

    //INSTRUCCIÓN DE INSERTAR O RUTINA DE CÁLCULO
    //AQUÍ PUEDES ALTERAR ESOS VALORES PARA MOSTRAR DIFERENTES VALORES

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
    <?php if($_POST) { ?> <!-- Podemos incluir código PHP embebido en HTML -->

    <strong> Hola: </strong> <?php echo $txtNombre; ?><br/>

    <strong> Tu lenguaje es </strong> <?php echo $rdLenguaje; ?><br/>

    <strong> Estás aprendiendo </strong> 
    - <?php echo ($chkPHP == "checked") ? "PHP": "" ?>
    - <?php echo ($chkHTML == "checked") ? "HTML": "" ?>
    - <?php echo ($chkCSS == "checked") ? "CSS": "" ?>

    <br/>

    <strong> El anime que te gusta es </strong> <?php echo $lsAnime; ?><br/>

    <strong>Tu comentario es </strong><?php echo $txtComentario; ?><br/>



    <?php } ?>


    <form action="ejercicio31.php" method="post">
    
    <br/>

    Nombre: <input value="<?php echo $txtNombre; ?>" type="text" name="txtNombre" id="">
   
    <br/><br/>
   
    ¿Te gusta?:<br/><br/>
    PHP: <input type="radio" <?php echo ($rdLenguaje == "PHP")?"checked":"" ?> name="lenguaje" value="PHP" id=""><br/>
    HTML: <input type="radio" <?php echo ($rdLenguaje == "HTML")?"checked":"" ?> name="lenguaje" value="HTML" id=""><br/>
    CSS: <input type="radio" <?php echo ($rdLenguaje == "CSS")?"checked":"" ?> name="lenguaje" value="CSS" id=""><br/><br/>

    Estás aprendiendo...<br/><br/>

    PHP: <input type="checkbox" <?php echo $chkPHP; ?> name="chkPHP" value="si" id=""><br/>
    HTML: <input type="checkbox" <?php echo $chkHTML; ?> name="chkHTML" value="si" id=""><br/>
    CSS: <input type="checkbox" <?php echo $chkCSS; ?> name="chkCSS" value="si" id=""><br/>

    <br/><br/>

    ¿Qué anime te gusta?...<br/><br/>
    <select name="lsAnime" id="">
        
        <option value="">[Ninguna Serie]</option>
        <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected": "" ?> >Naruto</option>
        <option value="bleach" <?php echo ($lsAnime == "bleach") ? "selected": "" ?> >Bleach</option>
        <option value="dragon" <?php echo ($lsAnime == "dragon") ? "selected": "" ?> >Dragon Ball</option>

    </select>

    <br/><br/>

    ¿Tienes alguna duda?<br/><br/>

    <textarea name="txtComentario" id="" cols="30" rows="10">
    <?php echo $txtComentario; ?>
    </textarea>


    <br/><br/>

    <input type="submit" value="Enviar informacion">


    </form>


</body>
</html>