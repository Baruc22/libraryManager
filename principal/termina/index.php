<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?> ">
  <title>Formulario Registro</title>
</head>
<body>
	<form method="post">
	  <section class="form-register">
		<h4>Registro De Usuarios</h4>
		<input class="controls" type="text" name="codnum"  placeholder="Ingrese el numero de pedido">
		<input class="botons" type="submit" name="terminar">
	  </section>
	 </form> 
	 <?php
	 include("registrarusu.php");
	 ?>
	<a class="regresar" href="http://localhost/biblioteca/principal/principal.php"><img src="http://localhost\biblioteca\formularios\usuario\volver.png"/></a>
</body>
</html>