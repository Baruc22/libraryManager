<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <title>Formulario Registro</title>
</head>
<body>
	<form method="post">
	  <section class="form-register">
		<h4>Registro De Libros</h4>
		<input class="controls" type="text" name="codigo"  placeholder="Ingrese el Codigo">
		<input class="controls" type="text" name="nombre"  placeholder="Ingrese el Nombre del Libro">
		<input class="controls" type="text" name="autor"  placeholder="Ingrese el Nombre del Autor">
		<input class="controls" type="text" name="editorial"  placeholder="Ingrese el Editorial">
		<input class="controls" type="text" name="numpag"  placeholder="Ingrese el Numero de Paginas">
		<input class="controls" type="text" name="seccion"  placeholder="Ingrese la Sección">
		<input class="controls" type="text" name="genero"  placeholder="Ingrese el Genero">
		<input class="controls" type="text" name="anoedi"  placeholder="Ingrese el Año de Edición">
		<input class="botons" type="submit" name="Agregar" value="Agregar">
	  </section>
	</form>
	<?php
	include("registrarlib.php");
	?>
	<a class="regresar" href="../../principal/principal.php"><img src="volver.png"/></a>
</body>
</html>