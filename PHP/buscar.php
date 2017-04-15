<!DOCTYPE html>
<html>
<head>
	<title>buscar</title>
</head>
<body>
<?php 
include("conexion.php");
$con=mysql_connect($host,$user,$pw) or die("Conexion:".mysql_error());

mysql_select_db($db,$con) or die("Conectar");

$resultado = mysql_query("select * from Kam_cliente where identificacionCli='$_POST[iden]'")or die("Consulta".mysql_error());

while($res = mysql_fetch_array($resultado)){
	echo "identificacion " . $res["identificacionCli"]."<br>" ; 
	echo "nombre " . $res["nombreCli"]."<br>" ; 
	echo "Apellido " . $res["apellidoCli"]."<br>" ; 	
}
 ?>
 <br>
 <form action="eliminar.php" method="POST" name="frm">
 	<input type="text" name="nombreE" />
 	<input type="submit" name="Eliminar" value="Eliminar">
 </form>
</body>
</html>