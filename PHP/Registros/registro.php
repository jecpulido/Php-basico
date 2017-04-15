<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>registro</title>
</head>
<body>
<form action="registrar.php" method="POST">
	<table width="auto" border="0">
		<tr>
			<td>NOMBRE: </td>
			<td> <input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td>USUARIO</td>
			<td> <input type="text" name="user"></td>
		</tr>
		<tr>
			<td>CONTRASEÑA</td>
			<td> <input type="password" name="pw"></td>
		</tr>
		<tr>
			<td>CONF. CONTRASEÑA</td>
			<td> <input type="password" name="pw2"></td>
		</tr>
		<tr>
			<td>EMAIL</td>
			<td> <input type="text" name="email"></td>
		</tr>
		<tr>			
			<td colspan="2"> <input type="submit" value="Registrar"></td>
		</tr>
	</table>
</form>

</body>
</html>