<?php
include("con_db.php");
?>
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
		<h4>Registro De Prestamo</h4>
		<select class="controls" name="codusu" >
			<option value="">Selecione el Codigo del usuario</option>
			<?php
			
			$sql=$conex -> query(" select * from usuario");
			
			while($fila=$sql->fetch_array()){
				echo"<option value='".$fila['codigo']."'>".$fila['codigo']."</option>";
			}
			?>
		</select>	
		<select class="controls" name="codlibro" >
			<option value="">Selecione el Codigo del libro</option>
			<?php
			$conex1=include("con_db.php");
			$sql1=$conex -> query(" select * from libro");
			
			while($fila1=$sql1->fetch_array()){
				echo"<option value='".$fila1['codigo']."'>".$fila1['codigo']."</option>";
			}
			?>
		</select>
		<input class="controls" type="text" name="fechasali"  placeholder="Fecha de Salida AAAA/MM/DD">
		<input class="controls" type="text" name="fechalimdevo"  placeholder="Fecha Limite de Devolución AAAA/MM/DD">
		<input class="botons" type="submit" name="Agregar" value="Agregar">
	  </section>
	</form>
	<?php
	include("registrarpres.php");
	?>
	<a class="regresar" href="../../principal/principal.php"><img src="volver.png"/></a>
</body>
</html>