<?php 
	include("conexion.php");
	$con=mysql_connect($host,$user,$pw) or die("Error server");

	mysql_select_db($db,$con) or die("Error DB");

	mysql_query("Update registros set nombre = '$_POST[nuevo]' where nombre='$_POST[viejo]' ", $con) or die("Error Query");

	echo "Actualizacion exitosa";
 ?>