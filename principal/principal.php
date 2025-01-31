<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css?v=<?php echo time(); ?> ">
	<title>Biblioteca</title>
</head>
<body background="css/Library.jpg">
	<header class="titulo">Biblioteca Amado Nervo</header>
	<section>
		<div class="Admin"><?php 
							session_name("biblioteca");
							session_start();
							print "<p>$_SESSION[nombre]</p>";
		?></div>
	</section>
	<nav class="menu">
		<ul class="principal">
		
		<li class="boton_p"><a href="#">Usuarios</a>
			<ul class="boton_d">
				<li class="bot_des"><a class="boton_s" href="../Busquedas/BLectores/BuscarLec.html">Buscar Usuario</a></li>
				<li class="bot_des"><a class="boton_s" href="..\formularios\usuario\index.php">Agregar Usuario</a></li>
			</ul>
		</li>
			<li class="boton_p"><a href="#">Prestamos</a>
				<ul>
				<li><a class="boton_s" href="../Busquedas/BPrestamos/BuscarP.html">Buscar Prestamo</a></li>
				<li><a class="boton_s" href="..\formularios\Prestamo\index.php">Nuevo Prestamo</a></li>
				</ul>
			</li>
			<li class="boton_p"><a href="#">Libros</a>
				<ul>
				<li><a class="boton_s" href="../Busquedas/Blibros/BuscarL.html">Buscar Libro</a></li>
				<li><a class="boton_s" href="..\formularios\libro\index.php">Agregar Libro</a></li>
				</ul>
			</li>
		</ul>
	</nav>

	<section class="notificacion">
		<p>Notificaciones</p>
		<table>
			<tr style="background-color:#50ABBEFF ">
				<td>Numero de pedido</td>
				<td>Codigo de usuario</td>
				<td>Codigo de libro</td>
				<td>Fecha de salida</td>
				<td>Fecha de devolucion</td>
				<td>Fecha limite de devolucion</td>
			</tr>
			<?php  
				require_once "funciones.php";
				$db = conectaDB();
				//$dbTabla="Prestamo";
				$consulta =fechaAct();// retorna consulta de fecha actual 
				//echo $consulta;
				$result = $db->query($consulta);
				if (!$result) {
					print "    <p>Error en la consulta.</p>\n";
				} else {
					foreach ($result as $valor) { ?>
					<tr style = "background-color:#69DEB7FF">
						<td><?php echo $valor['numero_pedido'];?></td>
						<td><?php echo $valor['codigo_usuario'];?></td>
						<td><?php echo $valor['codigo_libro'];?></td>
						<td><?php echo $valor['fecha_salida'];?></td>
						<td><?php echo $valor['fecha_devolucion'];?></td>
						<td><?php echo $valor['fecha_limite_devolucion'];?></td>
					</tr>
					<?php
					}
				}
				?>			
		</table>		
	</section>
	<div class="terminaP">
		<form name= "formulario" method= "post" action="termina.php" >

			<input type="text" name="pedido" value="" placeholder="Ingrese el numero pedido" class="texP">
			<input class="buttonT" type="submit" value="Terminar entrega">

		</form>
		
	</div>
	<div ><a class="close_s" href="..\Inicio_Sesion\login.php">cerrar sesion</a><?php $db =  null;?>
	</div>

</body>
</html>

