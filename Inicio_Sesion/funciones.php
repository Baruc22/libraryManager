<?php 
define("MYSQL_HOST", "mysql:host=localhost;dbname=biblioteca");
define("MYSQL_USER", "root");
define("MYSQL_PASSWORD", "");
#define("MYSQL_PASSWORD", "2018");

// FUNCIÓN DE CONEXIÓN CON LA BASE DE DATOS MYSQL
function conectaDb(){
    try {
        $tmp = new PDO(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $tmp->exec("set names utf8mb4");
        return($tmp);
    } catch(PDOException $e) {
        cabecera("Error grave", MENU_PRINCIPAL);
        print "    <p>Error: No puede conectarse con la base de datos.</p>\n";
        print "\n";
        print "    <p>Error: " . $e->getMessage() . "</p>\n";
        pie();
        exit();
    }
}//hugoe@mixteco.utm.mx
function fechaAct(){
    date_default_timezone_set("America/Mexico_City"); 
    $self = $_SERVER['PHP_SELF']; //Obtenemos la página en la que nos encontramos
    header("refresh:600; url=$self"); //Refrescamos cada 300 segundos
    $fecha_actual = date('Y-m-d');

    return ("SELECT * FROM prestamo WHERE fecha_devolucion is null and fecha_limite_devolucion BETWEEN '".$fecha_actual."' AND '".$fecha_actual."'" ); 
}
//SELECT * FROM prestamo WHERE fecha_devolucion is null and fecha_limite_devolucion BETWEEN '2021-02-09' AND '2021-02-09'

?>

