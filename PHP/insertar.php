<!DOCTYPE html>
<html>
<head>
	<title>Mensaje</title>
</head>
<body>
<?php 
include("conexion.php");
if (isset($_POST["id"]) && !empty($_POST["id"]) && isset($_POST["nombre"]) && !empty($_POST["nombre"]) && isset($_POST["apellido"]) && !empty($_POST["apellido"]))
	{
		$con=mysql_connect($host,$user,$pw) or die("ERRORR");
		mysql_select_db($db,$con) or die("Problemas a conectar a db");
		mysql_query("insert into Kam_cliente (identificacionCli,nombreCli,apellidoCli) values('$_POST[id]','$_POST[nombre]','$_POST[apellido]')",$con) or die("Consulta ".mysql_error());
		echo "Datos insertados";
	}else{
		echo "Prolemas al insertar datos";
	}
 ?>
<br>
<form action="buscar.php" method="POST">
	identificacion
	<input type="text" name="iden" />
	<input type="submit" name="buscar" value="Buscar" />
</form>

</body>
</html>

