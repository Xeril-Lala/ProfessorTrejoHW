<?php
include('film.php');
	 $myfilm = new film();
	 $arrayfilms["items"] = array(); //GENERAR JSON POR PARTES
	 $dataset = $myfilm->selectFilm();
	 if (mysqli_num_rows($dataset)>0){
		   while ($row=mysqli_fetch_assoc($dataset)){
		   $item = array(  //FORMAR EL JSON POR DIVISION DE NOSOTROS
		           'id' => $row['film_id'],
				   'nombre' => $row['title'],
				   'duracion' => $row['length']);          
		   array_push($arrayfilms['items'],$item);
		 }//FIN WHILE
		 echo json_encode($arrayfilms); //MANDAR A JSON 
	 } //end if 
	 else{
		  echo json_encode(
		  array('error'=> 'sin datos para mostrar'));
	 } //fin else 
//} fin function
//} fin clase
?>