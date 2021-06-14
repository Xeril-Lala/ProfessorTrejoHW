<?php
class claseDB{
    //variables de clase 
	private $HOST;
	private $USER;
	private $PASS;
	private $DB;
	private $connection;
	private $dataset;
	//constructor, es un metodo
	function __construct(){
	$this->HOST="localhost";
	$this->USER="root";
	$this->PASS="";
	$this->DB="sakila";
	}
	public function conectar(){
	   	   $this->connection=@mysqli_connect(
		                              $this->HOST,$this->USER,
									   $this->PASS,$this->DB);
		 //  if($this->connection){
		 //    echo "Si conecto";
		 //  }
		 //  else{
		 //     echo"No conecto";
		 //  }
	}
	public function consultarArray($sql){
		$this->dataset=mysqli_query($this->connection,$sql);
		if($this->dataset){
		//   echo "consulta realizada";
		   $i=0;
		   while ($row=mysqli_fetch_assoc($this->dataset)){
		          $array[$i]=$row;
			      $i++;
		   }
		   return $array;
		}
		else{
		 // echo "consulta no realizada";
		  return 0;
		}
	}
	public function consultar($sql){
		$this->dataset=mysqli_query($this->connection,$sql);
		if($this->dataset){
		   //echo "consulta realizada";
		   return $this->dataset;
		}
		else{
		 // echo "consulta no realizada";
		  return 0;
		}
		
	}
}
?>