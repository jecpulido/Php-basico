<?php  
session_start();
include("conexion.php");
if (isset($_POST["usuario"]) && !empty($_POST["usuario"]) &&
	isset($_POST["pwd"]) && !empty($_POST["pwd"]))
	{
		$con=mysql_connect($host,$user,$pw) or die("Problema con server ".mysql_error());
		mysql_select_db($db,$con) or die("Problemas con la BD ". mysql_error())	;

		$sel=mysql_query("Select user,pw from registros where user='$_POST[usuario]'",$con) or die("Error consulta ".mysql_error());

		$sesion=mysql_fetch_array($sel);

		if($_POST["pwd"]==$sesion["pw"]){
			$_SESSION["username"] = $_POST["usuario"];
			echo "Session exitosa";
		}else{
			echo "Usuario o Contraseña Incorrectas";
		}

	}else{
		echo "Llenar todos los campos";
	}


 ?>