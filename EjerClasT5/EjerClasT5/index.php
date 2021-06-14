<html>
<body>
<?php 
$array= json_decode(file_get_contents
('http://localhost:8080/web2020/cuartob/EjerClasT5/apifilm.php'));
foreach($array->items as $element){
	echo$element->id ."<br>";
	echo$element->nombre ."<br>";
	echo$element->duracion ."<br>";
}
?>
</body>
</html>