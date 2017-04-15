<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<p>Hola Mundo</p>';
 	echo $_SERVER['PHP_SELF']. '<br/>';

 	echo $_SERVER['HTTP_USER_AGENT']. '<br/>';
 	echo $_SERVER['SERVER_SOFTWARE']. '<br/>';
 	echo $_SERVER['SERVER_NAME']. '<br/>';
  phpinfo();
  ?>
 </body>
</html>
