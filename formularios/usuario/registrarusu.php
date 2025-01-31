<?php
include("con_db.php");


if (isset($_POST['Registrar'])) {
    if (strlen($_POST['codigo']) >= 1 && strlen($_POST['nombres']) >= 1 && strlen($_POST['apellidop']) >= 1 && strlen($_POST['apellidom']) >= 1 &&
		strlen($_POST['curp']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['poblacion']) >= 1) {
	    $codigo = trim($_POST['codigo']);
	    $nombres = trim($_POST['nombres']);
	    $apellidop = trim($_POST['apellidop']);
		$apellidom = trim($_POST['apellidom']);
		$curp = trim($_POST['curp']);
		$fecha = trim($_POST['fecha']);
		$telefono = trim($_POST['telefono']);
		$direccion = trim($_POST['direccion']);
		$poblacion = trim($_POST['poblacion']);
	    $consulta = "INSERT INTO usuario(codigo, nombre,apellido_materno,apellido_paterno,direccion,fecha_nacimiento,poblacion,telefono,curp) VALUES ('$codigo','$nombres','$apellidom','$apellidop','$direccion','$fecha','$poblacion','$telefono','$curp')";
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