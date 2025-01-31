<?php
include("con_db.php");


if (isset($_POST['Agregar'])) {
    if (strlen($_POST['codlibro']) >= 1 && strlen($_POST['codusu']) >= 1 && strlen($_POST['fechasali']) >= 1 && strlen($_POST['fechalimdevo']) >= 1) {
	    $codlibro = trim($_POST['codlibro']);
	    $codusu = trim($_POST['codusu']);
	    $fechasali = trim($_POST['fechasali']);
		$fechalimdevo = trim($_POST['fechalimdevo']);
		$fechadevo="NULL";
	    $consulta = "INSERT INTO prestamo(codigo_usuario, codigo_libro, fecha_salida, fecha_devolucion, fecha_limite_devolucion) VALUES ('$codusu','$codlibro','$fechasali','$fechadevo','$fechalimdevo)";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	
			$id ="¡Se a registrado correctamente!";
			echo '<script language="javascript">alert("'.$id.'");</script>';
           
	    } else {
	    	
	    	
			$id ="¡Ups ha ocurrido un error!";
			echo '<script language="javascript">alert("'.$id.'");</script>';
           
	    }
    }   else {
	    	
	  
			$id ="¡Por favor complete los campos!";
			echo '<script language="javascript">alert("'.$id.'");</script>';
           
    }
}


?>