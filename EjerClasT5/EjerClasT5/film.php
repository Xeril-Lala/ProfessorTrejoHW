<?php
include('claseDB.php'); 
     class film extends claseDB{
		 private $id;
		 private $title;
		 
		 public function selectFilm(){
			 $this->conectar();
			 $dataset = $this->consultar("select * from film;");
			 return $dataset;
		 }
	 }
?>