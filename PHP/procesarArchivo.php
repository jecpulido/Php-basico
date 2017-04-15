<?php
	$_file = fopen("archivo.txt", "a") or die("problemas a crear archivo");

	fwrite($_file, "Datos");
	fwrite($_file, "\n");
	fwrite($_file,	$_POST["nombre"]);
	fwrite($_file, "\n");
	fwrite($_file,	$_POST["comentario"]);
	fwrite($_file, "\n");
	fwrite($_file, "------------------------------------ \n\n");
	fclose($_file);
	echo "Datos guardados"
?>