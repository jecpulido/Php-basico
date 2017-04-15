<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviar Datos</title>
	<style type="text/css">
		input{padding-top: 5px; margin: 5px}
	</style>
</head>
<body>
	<form name="frm" action="procesar.php" method="POST">
		<div align="center" style="border: 2px solid; padding: 5px; width: 20%; margin: auto; border-radius: 10px">
			<h3>LOGIN</h3>
			<output> Nombre</output>
			<input type="text" name="nombre"/><br />
			<output> Apellido</output>
			<input type="text" name="apellido"/><br />
			<input type="submit" name="Enviar" value="Enviar">
			<input type="submit" name="Cancelar" value="Cancelar">
		
		</div>
	</form>
</body>
</html>