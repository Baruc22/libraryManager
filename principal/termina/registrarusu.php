<?php
include("con_db.php");

if (isset($_POST['terminar'])) {
    if (strlen($_POST['codnum']) >= 1) {
	    $codpres = trim($_POST['codnum']);
	    $consulta = "SELECT * FROM `prestamo` WHERE numero_pedido ='$codpres' ";
	    $resultado = mysqli_query($conex,$consulta);
	    if (!$resultado) {
	    	
			$id ="¡Se a registrado correctamente!";
			echo '<script language="javascript">alert("'.$id.'");</script>';
			print_r($resultado);
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