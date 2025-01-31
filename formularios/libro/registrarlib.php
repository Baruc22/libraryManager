<?php
include("con_db.php");


if (isset($_POST['Agregar'])) {
    if (strlen($_POST['codigo']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['autor']) >= 1 && strlen($_POST['editorial']) >= 1 &&
		strlen($_POST['numpag']) >= 1 && strlen($_POST['seccion']) >= 1 && strlen($_POST['genero']) >= 1 && strlen($_POST['anoedi']) >= 1 ) {
	    $codigo = trim($_POST['codigo']);
	    $nombre = trim($_POST['nombre']);
	    $autor = trim($_POST['autor']);
		$editorial = trim($_POST['editorial']);
		$numpag = trim($_POST['numpag']);
		$seccion = trim($_POST['seccion']);
		$genero = trim($_POST['genero']);
		$anoedi = trim($_POST['anoedi']);
		$estado = "libre";
	    $consulta = "INSERT INTO libro(codigo,nombre,autor,editorial,numero_paginas,seccion, genero,anio_edicion,estado) VALUES ('$codigo','$nombre','$autor','$editorial','$numpag','$seccion','$genero','$anoedi','$estado')";
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