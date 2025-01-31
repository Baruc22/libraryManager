<?php
include("con_db.php");


if (isset($_POST['Agregar'])) {
    if (strlen($_POST['codlibro']) >= 1 && strlen($_POST['codusu']) >= 1 && strlen($_POST['fechasali']) >= 1 && strlen($_POST['fechalimdevo']) >= 1) {
	    $codlibro = trim($_POST['codlibro']);
	    $codusu = trim($_POST['codusu']);
	    $fechasali = trim($_POST['fechasali']);
		$fechalimdevo = trim($_POST['fechalimdevo']);
		$vl="LIBRE";
		//$fechadevo=null;
		$validacion="SELECT * FROM `libro` WHERE codigo='$codlibro'";
		$resul1 = mysqli_query($conex,$validacion);
		//echo '<script language="javascript">alert("'.$resul1.'");</script>';
		if($resul1){
			foreach ($resul1 as $valor) {
                $edo = $valor['estado'];
                
				}
			if($edo == $vl){
				$consulta = "INSERT INTO prestamo(codigo_usuario, codigo_libro, fecha_salida, fecha_limite_devolucion) VALUES ('$codusu','$codlibro','$fechasali','$fechalimdevo')";
				$resultado = mysqli_query($conex,$consulta);
		
				if ($resultado) {
				
				$id ="¡Se a registrado correctamente!";
				echo '<script language="javascript">alert("'.$id.'");</script>';
			   
				} else {
				
				
					$id ="¡Ups ha ocurrido un error,Verifique que el codigo de usuario o el codigo de libro ya existan!";
					echo '<script language="javascript">alert("'.$id.'");</script>';
			   
				}
					$consulta1="UPDATE libro SET estado= 'PRESTADO' WHERE codigo= '$codlibro'";
					$resultado1 = mysqli_query($conex,$consulta1);
			}else{
					
				$id ="¡Ups ha ocurrido un error,esta ocupado el libro!";
				echo '<script language="javascript">alert("'.$id.'");</script>';
			}
	   
		
	
		
    }   
	}else {
	    	
	  
			$id ="¡Por favor complete los campos!";
			echo '<script language="javascript">alert("'.$id.'");</script>';
           
    }
}

?>
