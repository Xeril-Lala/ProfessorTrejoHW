<?php
class claseDB{
//variables de clase
private $HOST;
private $USER;
private $PASS;
private $DB;
private $connection;
private $dataset;
//condtrusctor, es un metodo
public function __construct(){
    $this->HOST="localhost";
    $this->USER="root";
    $this->PASS="";
    $this->DB="cuartob";
}
/*
function _construct($host,$user,$pass,$db){
    $this->HOST=$host;
    $this->USER=$user;
    $this->PASS=$pass;
    $this->DB=$db;
}
*/
public function conectar() {
    $this->connection=@mysqli_connect($this->HOST,$this->USER,$this->PASS,$this->DB);
    if ($this->connection){
        //echo"si conecto ";
    }
    else{
        //echo"no conecto";
    }
}

    


public function consultarArray($sql){
        $this->dataset=mysqli_query($this->connection,$sql);
        if($this->dataset){
            //echo "consulta realizada";
            $i=0;
            while($row=mysqli_fetch_assoc($this->dataset)){
                $array[$i]=$row;
                $i++;
            }
            return $array;
        }
        else{
           //echo "consulta realizada";
            return 0;
        }
    }
    public function query($sql){
        $resultado = mysqli_query($this->connection,$sql);    
        
        if($resultado){
            echo"query realizada";
            //return $this->dataset;
        }
        else{
            echo"query no realizado";
            //return 0;
        }
}

public function cerrar(){
    $this->connection.close();
}
}
//metodos, get, set, otros metodos
//c# propiedades, solo existe en microsoft
//pasos 1. Entrar al servidor BD
//2. Ubicarse en la BD
//3. Especificar consulta, seleccionar y ejecutar
//4. Manipular los resultados, dataset
// a veces se colocan en un arreglo para manejar las filas 
?>