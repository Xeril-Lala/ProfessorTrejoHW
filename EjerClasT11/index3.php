<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$archivo = file_get_contents('http://localhost/cuartob/EjerClasT11/datos3.json');
$array = json_decode($archivo,true);
$tabla ="create table todos(";
$campos="";
  foreach($array as $element){                          //Tomar layout de la tabla       
        foreach($element as $key=>$value) {
            //echo $key."=".$value."tipo".gettype($value)."<br>";
            switch(gettype($value)){
                case "integer": $tabla=$tabla.$key." integer, ";
                    break;
                case "string": $tabla=$tabla.$key." varchar(70), ";
                    break;
                case "boolean": $tabla=$tabla.$key." bit, ";
                    break;
            }
            //$tabla=$tabla.$key." varchar(70), ";
            $campos=$campos.$key.", ";
            //echo $key."<br>";
            //echo $key."=".$value."<br>";
            //print_r($data);
            //echo "<br>";
        } 
        break;   
    }
    $tabla = substr($tabla,0,-2);
    $campos = substr($campos,0,-2);
    echo $campos."<br>";

    $tabla=$tabla.");";
    echo $tabla;
    include('claseDB.php');
    $miconexion = new claseDB();
    $miconexion->conectar();
    $drop = "drop table if exists todos;";
    $miconexion->query($drop);  //Borra la tabla si existe
    $miconexion->query($tabla); //Crea la tabla

    //inserts
    $insert = "insert into todos(".$campos.") values(";
    foreach($array as $element){                 //recorrer el json para insertar  
        $valores="";
        foreach($element as $key=>$value) {
            if($key=="completed"){
                if($value==1){
                    $value="true";
                }else{
                    $value="false";
                }
            }
           $valores=$valores."'".$value."', ";
           //echo "<br>"
        } 
        $valores = substr($valores,0,-2);//
        $query=$insert.$valores.");";
        echo $query."<br>";
        //$miconexion->query($query); //Insertar registro
      
    } 

?>
</body>
</html>