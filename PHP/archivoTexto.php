<!DOCTYPE html>
<html>
<head>
	<title>Guardar Archivos </title>
	<style type="text/css">
		textarea{margin: 5px}
		input{margin: 5px}
	</style>
</head>
<body>
	<form action="procesarArchivo.php" method="POST" name="frm">
		<fieldset style="width: auto">
			<h3>Guardar</h3>
			Nombre<br/>
			<input type="text" name="nombre" /><br/>
			Comentario<br/>
			<textarea name="comentario"></textarea><br/>
			<input type="submit" name="Enviar" value="Guardar datos">
		</fieldset>
	</form>
</body>
</html>