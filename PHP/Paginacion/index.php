<?php
	//Conectamos a la base de datos
	require('conexion.php');

	//Evitamos que salgan errores por variables vacías
	error_reporting(E_ALL ^ E_NOTICE);

	//Cantidad de resultados por página (debe ser INT, no string/varchar)
	$cantidad_resultados_por_pagina = 3;

	//Comprueba si está seteado el GET de HTTP
	if (isset($_GET["pagina"])) {

		//Si el GET de HTTP SÍ es una string / cadena, procede
		if (is_string($_GET["pagina"])) {

			//Si la string es numérica, define la variable 'pagina'
			 if (is_numeric($_GET["pagina"])) {

				 //Si la petición desde la paginación es la página uno
				 //en lugar de ir a 'index.php?pagina=1' se iría directamente a 'index.php'
				 if ($_GET["pagina"] == 1) {
					 header("Location: index.php");
					 die();
				 } else { //Si la petición desde la paginación no es para ir a la pagina 1, va a la que sea
					 $pagina = $_GET["pagina"];
				};

			 } else { //Si la string no es numérica, redirige al index (por ejemplo: index.php?pagina=AAA)
				 header("Location: index.php");
				die();
			 };
		};

	} else { //Si el GET de HTTP no está seteado, lleva a la primera página (puede ser cambiado al index.php o lo que sea)
		$pagina = 1;
	};

	//Define el número 0 para empezar a paginar multiplicado por la cantidad de resultados por página
	$empezar_desde = ($pagina-1) * $cantidad_resultados_por_pagina;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paginacion</title>
</head>
<body>
<div style="border: 1px solid black">
<?php
	//Obtiene TODO de la tabla
	$obtener_todo_BD = "SELECT * FROM mmv004";

	//Realiza la consulta
	$consulta_todo = mysqli_query($connection, $obtener_todo_BD);

	//Cuenta el número total de registros
	$total_registros = mysqli_num_rows($consulta_todo);

	//Obtiene el total de páginas existentes
	$total_paginas = ceil($total_registros / $cantidad_resultados_por_pagina); 

	//Realiza la consulta en el orden de ID ascendente (cambiar "id" por, por ejemplo, "nombre" o "edad", alfabéticamente, etc.)
	//Limitada por la cantidad de cantidad por página
	$consulta_resultados = mysqli_query($connection, "
	SELECT * FROM `mmv004` 
	ORDER BY `mmv004`.`id` ASC 
	LIMIT $empezar_desde, $cantidad_resultados_por_pagina");

	//Crea un bluce 'while' y define a la variable 'datos' ($datos) como clave del array
	//que mostrará los resultados por nombre
	while($datos = mysqli_fetch_array($consulta_resultados)) {
?>

<span class="persona">
<p><strong><?php echo $datos['nombre']; ?></strong> <br>
<?php echo $datos['edad']; ?></p>
</span>

<?php
	};
?>
<hr>

<?php
	//Crea un bucle donde $i es igual 1, y hasta que $i sea menor o igual a X, a sumar (1, 2, 3, etc.)
	//Nota: X = $total_paginas
	for ($i=1; $i<=$total_paginas; $i++) {
		//En el bucle, muestra la paginación
		echo "<a href='?pagina=".$i."'>".$i."</a> | ";
	}; 
?>
</div>
</body>
</html>