<?php 
	include("conexion.php");

	if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
		isset($_POST['user']) && !empty($_POST['user']) &&
		isset($_POST['pw']) && !empty($_POST['pw']) &&
		isset($_POST['pw2']) && !empty($_POST['pw2']) &&
		isset($_POST['email']) && !empty($_POST['email']) &&
		($_POST['pw'] == $_POST['pw2']))
	{
		$con =mysql_connect($host,$user,$pw) or die("Problemas a conectar a server");

		mysql_select_db($db,$con) or die("Problemas al conectar a bd");

		mysql_query("Insert into registros(nombre,user,pw,email) values('$_POST[nombre]','$_POST[user]','$_POST[pw]','$_POST[email]')",$con);
		echo "Datos Insertados"."<br>";

		echo "Nombre: ". $_POST['nombre']. "<br>";		
		echo "Usuario: ". $_POST['user']. "<br>";
		echo "Email: ". $_POST['email']. "<br>";

	}else{
		echo "Verifique que lleno todos los campos y las password coinciden";
	}

 ?>