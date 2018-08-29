<?php
/**
 * Created by PhpStorm.
 * User: Sam
 * Date: 28/08/2018
 * Time: 23:03
 */
session_start();
?>

<html>
<head>

	<meta charset="UTF-8">
	<title>login</title>

</head>
<body>
<form action="validar.php" method="post" enctype="application/x-www-form-urlencoded">
	<label for="caja1"><p>Nombre de Usuario</p>
		<p><input type="text" id="caja1" name="usuario" placeholder="Usuario" required></p>
	</label>
	<label for="caja2"><p>Contraseña</p>
		<p><input type="password" id="caja2" name="password" placeholder="Contraseña" required></p>
	</label>
	<input type="submit" value="Iniciar sesion">

</form>
</body>
</html>


