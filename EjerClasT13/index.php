<!DOCTYPE html>
<html>
    <head>
        <title>Noticias XML </title>
    </head>
    <body>
        XML<br>
<?php

/*
    $key    =   'eb6eb8a68cf245969ebe6d28ee95bff4';
    $fecha  =   '';//fecha en formato de 4 digitos
    $clave  =   '';//palabra para busqueda
    $pais   =   'us';//pais
*/

$xml = simplexml_load_file('https://rss.nytimes.com/services/xml/rss/nyt/Music.xml');
    //print_r($xml);
    //echo $xml->channel->item->title;
    $array=$xml->channel->item;

    foreach ($array as $element){
    //print_r($element);
     
        echo "link:".$element->link."<br>";
        echo "title:".$element->title."<br>";
        echo "description:".$element->description."<br>";
        //echo "autor:".$element->dc:creator."<br>";
        echo "<br>";
}


?>
    </body>
    </html>>