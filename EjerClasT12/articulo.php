<link rel="stylesheet" href="style.css" type="text/css">

<?php
$key    = 'abbf3d3369734b63a33d97e1b281fbb5';
$fecha  = $_SESSION['fecha'];
$clave  = $_SESSION['clave'];
$pais   = 'mx';
$urlCountry= 'https://newsapi.org/v2/top-headlines?country='.$pais.'&apiKey='.$key;
$url = 'https://newsapi.org/v2/everything?q='.$clave.'&from='.$fecha.'&sortBy=popularity&apiKey='.$key;
$array = json_decode(file_get_contents($url));
$articulos = $array->articles;
$cant = count($articulos);
//echo 'total articulos: '.$cant.'<br>';
$total = $cant>=4 ? 4: $cant;
//echo $total;
//foreach($articulos as $element) { //tomar layout de la tabla}
for($i=0; $i<$total;$i++){
  //echo $i.'<br>';
  echo '<section class="noticias" id=noticia'.$i.'>';
  $element = $articulos[$i];
  echo '<a class="titulo">'.$element->title.'</a><br>';
  echo '<section class="contenido">';

  echo '<a class="nombre">name:'.$element->source->name.'</a><br>';
  echo $element->author.",".$element->source->name."'<br>'";
  echo '<img src="'.$element->urlToImage.'" id="fotos"><br>';
  
  echo '<br>';
  echo $element->description;
  echo '<a href="'.$element->url.' " target="_blanc">Leer</a>';
  echo '<br>';
  echo '</section>';
  echo '</section>';
}

?>