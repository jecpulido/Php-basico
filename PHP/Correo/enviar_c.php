<?php 
	if(isset($_POST["asunto"]) && !empty($_POST["asunto"]) &&
		isset($_POST["mensaje"]) && !empty($_POST["mensaje"]))
	{

		$destino = "george_millitos@hotmail.com";
		$asunto	= $_POST["asunto"];
		$mensaje = $_POST["mensaje"];
		mail($destino, $asunto, $mensaje) ;
		echo "correo enviado";
	}else{
		echo "Problemas al enviar";
	}
 ?>