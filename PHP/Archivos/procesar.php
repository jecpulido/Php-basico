<?php 
	$carpeta = "files/";
	opendir($carpeta);
	$destino = $carpeta.$_FILES["foto"]["name"];
	copy($_FILES["foto"]["tmp_name"],$destino );
	echo "Archivo subido con exito<br>";
	$nombre = $_FILES["foto"]["name"];
	echo "<img src=\"files/$nombre\" width='100' height='100'><br>";
	echo $_FILES["foto"]["name"]."<br>";
	echo $_FILES["foto"]["size"]."BYTES <br>";
	echo $_FILES["foto"]["type"]."<br>";
 ?>