<?php

//CONSULTAR LA INFORMACIÓN DE UNA API (LAS API SIEMPRE PROPORCIONAN LA INFORMACIÓN EN FORMATO JSON)

$urlAPI = "http://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false)); //SE OBTIENE DE LA DOCUMENTACIÓN DE LA API
$json = file_get_contents($urlAPI, false, stream_context_create($opciones)); //LEE EL CONTENIDO Y LO CONVIERTE EN UN STRING, stream_context_create: desactiva el https para poder leer el contenido
$objjson = json_decode($json); //DECODIFICAR

//print_r($objjson); //VER ESTRUCTURA DEL ARRAY DE OBJETOS

//LECTURA DEL ARRAY DE OBJETOS
foreach($objjson->list as $video){

    print_r($video->title);
    print_r($video->channel);

}

?>

<ul>

    <?php foreach($objjson->list as $video) { ?>
        <li><?php echo $video->title; ?> | <?php echo $video->channel; ?></li>
        
    <?php } ?>

</ul>