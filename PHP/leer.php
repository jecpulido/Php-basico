<?php 
$archivo = fopen("archivo.txt", "r") 
or die("Problemas para abrir archivo.txt");

	while (!feof($archivo)) {
		$traer = fgets($archivo);
		$saltolinea = nl2br($traer);
		echo "".$saltolinea;
	}
 ?>