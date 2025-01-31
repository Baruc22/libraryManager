<?php
// La variable global $ _POST que permite acceder a los datos enviados con el método POST por su nombre
  // Para acceder a los datos enviados con el método GET, puede usar $ _GET
    $id = htmlspecialchars ( $_POST [ 'ID' ]);
    $contra = htmlspecialchars ( $_POST [ 'CONTRA' ]);

    require_once "funciones.php";
    $db = conectaDb();

    $dbTabla="administrador";
    $consulta = "SELECT * FROM $dbTabla";
    $result= $db->query($consulta);
    if(!$consulta){
        print "<p>Error en la consulta.</p>\n";
    } else {
        $bol = 1;
        foreach($result as $valor){
            if($valor['id']==$id && $valor['contraseña']==$contra){
                //si entra es porque se encontro la consulta adecuada y ahora es cosa de iniciar sesion y pasar los datos
                session_name("biblioteca");
                session_start();
                $bol=0;
                $_SESSION["nombre"]=$valor["nombre"];
                //print "<p>EL NOMBRE DE LA SESION ES $_SESSION[nombre]</p>"; //borrar solo se ocupo para pruebas      
                header("Location:..\principal\principal.php");
                //echo "<p>\n\n</p>",$id," ", $contra; //borrar solo se ocupo para pruebas      
            }
        }
        if($bol==1){
            $mensaje ="No se encontro al administrador: $id $contra verifique sus datos porfavor";
            echo '<script language="javascript">alert("'.$mensaje.'");</script>';
            header("Location:login.php");
        }
        
    }

    
    $db = null;
?>