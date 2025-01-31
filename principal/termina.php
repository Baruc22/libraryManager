<?php
    //echo "Hi";
    require_once "funciones.php";
    $db = conectaDb();
    $pedido = htmlspecialchars ( $_POST [ 'pedido' ]);
    $vp = intval($pedido);
    if (strlen($pedido) >= 1){
        $codpres = $vp;//
        $cons = "SELECT * FROM `prestamo` WHERE numero_pedido ='$codpres' ";
        $result = $db-> query($cons);
         if (!$result) {
              print "    <p>Error en la consulta.</p>\n";
        } 
        else{
                foreach ($result as $valor) {
                $numP = $valor['numero_pedido'];
                $codL = $valor['codigo_libro'];
                }
                // para terminar prestamo

            date_default_timezone_set("America/Mexico_City");
            $fecha_actual = date('Y-m-d');
            
            $actFS="UPDATE prestamo SET fecha_devolucion= '$fecha_actual' WHERE numero_pedido='$numP'";
            $consul1 = $db-> query($actFS);
            // para actualizar estado de libro
            $consulta1="UPDATE libro SET estado= 'LIBRE' WHERE codigo= '$codL'";
            $consul2 = $db-> query($consulta1);
        }

        header("Location:principal.php");
    }
    else{
        $mensaje = "Falto ingresar numero de pedido";
        echo '<script language="javascript">alert("'.$mensaje.'");</script>';
    }

?>