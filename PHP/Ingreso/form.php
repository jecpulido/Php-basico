<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Login</title>
	<style type="text/css">
		input[type="text"] ,input[type="password"] 
		{
  				display: block;
  				margin-top: 3px;
 				width: 100%;
  				font-family: sans-serif;
  				font-size: 18px;
  				appearance: none;
  				box-shadow: none;
  				border-radius: none;
		}
		input[type="text"]:focus ,input[type="password"]:focus 
		{
		    outline: none;
		}

		input[type="submit"]
		{
			border: none;
			background: #3a7999;
			color: #f2f2f2;
			padding: 10px;
			font-size: 18px;
			border-radius: 5px;
			position: relative;
			box-sizing: border-box;
			transition: all 500ms ease;

		}
	</style>
</head>
<body>
	<form action="login.php" method="POST">
		<center>	
		<fieldset style="display: inline-block; margin: 5px;">
			<h2>LOGIN</h2>
			USUARIO <br>
			<input type="text" name="usuario"  /> <br>
			CONTRASEÑA<br>
			<input type="password" name="pwd"  /> <br>
			<input type="submit" value="Ingresar" />	
		</fieldset>
		</center>
	</form>
</body>
</html>