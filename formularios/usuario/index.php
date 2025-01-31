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
		<input class="controls" type="text" name="codigo"  placeholder="Ingrese el Codigo de Usuario">
		<input class="controls" type="text" name="nombres"  placeholder="Ingrese su Nombre">
		<input class="controls" type="text" name="apellidop"  placeholder="Ingrese su Apellido Paterno">
		<input class="controls" type="text" name="apellidom"  placeholder="Ingrese su Apellido Materno">
		<input class="controls" type="text" name="curp"  placeholder="Ingrese su CURP">
		<input class="controls" type="text" name="fecha"  placeholder="Ingrese su Fecha de Nacimiento AAAA/MM/DD">
		<input class="controls" type="text" name="telefono"  placeholder="Ingrese su Número de Telefono">
		<input class="controls" type="text" name="direccion"  placeholder="Ingrese su Dirección">
		<input class="controls" type="text" name="poblacion"  placeholder="Ingrese su Población">
		<input class="botons" type="submit" name="Registrar" value="Agregar">
	  </section>
	 </form> 
	 <?php
	 include("registrarusu.php");
	 ?>
	<a class="regresar" href="../../principal/principal.php"><img src="volver.png"/></a>
</body>
</html>