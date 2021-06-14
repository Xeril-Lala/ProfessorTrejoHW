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
//$archivo = file_get_contents('C:\xampp\htdocs\cuartob\EjerClasT11\datos3.json');
$archivo = file_get_contents('http://localhost/cuartob/EjerClasT11/datos3.json');

$array = json_decode($archivo,true);
$tabla="create table todos(";
$campos="";
//$cant = count($array);
//echo "total registros".$cant;
//la forma de mostrar
  foreach($array as $element){
       //print_r($elemento);
        //echo "<br>";
        foreach($element as $key=>$value) {
          $tabla=$tabla.$key."varchar(70),";
          $campos=$campos.$key.",";
          //echo $key."<br>";
            //print_r($data);
            //echo "<br>";
        } 
        break;
    }
    $tabla= substr($tabla,0,-1);
    $tabla = substr($tabla,0,-1);
    $campos= substr($campos,0,-1);
    $campos = substr($campos,0,-1);
    echo $campos."<br>";
    $tabla=$tabla.");";
    echo $tabla;
    echo $tabla;
    include('claseDB.php');
    $miconexion = new claseDB();
    $miconexion->conectar();
    $drop = "drop table if exists todos;";
    
    $miconexion->query($drop); //borra la tabla si existe
    $miconexion->query($tabla); //crea la tabla
    
    //inserts
    $insert = "insert into todos(".$campos.") values(";
    foreach($array as $element){
      $valores="";
       foreach($element as $key=>$value) {
           if($key=="completed"){
               if($value==1) $value="true";} 
                else{$value="false";};
           }
         $valores=$valores.$value.", ";
       } 
       $query=$insert.$valores.");";
       echo $query."<br>";
        $valores = substr($valores,0,-1);
        $valores = substr($valores,0,-1);
        $query=$insert.$valores.");";
        echo $query."<br>";
        $miconexion->query($query); //crea registros
?>
</body>
</html>
        </html>
