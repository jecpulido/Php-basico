<?php 
	session_start();
	if(isset($_SESSION["username"])){
		echo "Puedes ver esta pagina";
		echo "<br><a href='destruir.php'>Cerrar sesion</a>";
	}else{
		echo "No Puedes ver esta pagina";
	}
 ?>