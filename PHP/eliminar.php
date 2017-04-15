<!DOCTYPE html>
<html>
<head>
	<title>eliminar</title>
</head>
<body>
	<?php 
		include("conexion.php");
		$conn=mysql_connect($host,$user,$pw) or die("Conexion:".mysql_error());

		mysql_select_db($db,$conn) or die("Error con la base".mysql_error());

		$regis = mysql_query("Select IdentificacionCli from Kam_cliente where nombreCli ='$_POST[nombreE]'",$conn);

		if ($reg = mysql_fetch_array($regis)) {
			mysql_query("Delete from Kam_cliente where nombreCli ='$_POST[nombreE]'",$conn);
			echo "Cliente Eliminado";
		}else{
			echo "Cliente NO Eliminado";
		}

	 ?>
</body>
</html>