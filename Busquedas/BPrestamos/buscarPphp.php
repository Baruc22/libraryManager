<?php
	//conecta BD
	require_once "conexion.php";
	$db = conectaDB();
	//informacion formulario
	if(isset($_REQUEST["consulta"]) && $_REQUEST["consulta"]!==""){
		$cons=$_REQUEST["consulta"];
	}
	if(isset($_REQUEST["choice"]) && $_REQUEST["choice"]!==""){
		$dbTabla=$_REQUEST["choice"];
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styleBuscarP.css"/>
	<meta charset="utf-8">
	<title>BUSCAR PRESTAMOS</title>
	 
</head>
<body>
	<div class="parteA">
		<div class="buscador">
			<form action="buscarPphp.php">
				<p>BUSCAR: <input type="text" name="consulta" size="60" class="texto"/> </p>
				<p><input class="boton" type="image" src="../imagenes/botBuscar.png"></p>
				<p><input class="botonH" type="submit" value="Historial" name="consulta"></p>
				<div class="opciones">
					<div class="opcion1">
						<input type="radio" id="opc1" name="choice" value="usuario" checked />
						<label for="opc1">Nombre del lector</label>
					</div>
					
					<div class="opcion">
						<input type="radio" id="opc2" name="choice" value="libro"/>
						<label for="opc2">Nombre del libro</label>
					</div>
					<div class="opcion">
						<input type="radio" id="opc3" name="choice" value="devolver"/>
						<label for="opc3">Por devolver</label>
					</div>								
				</div>				
			</form>
		</div>		
	</div>
	<div class="parteB">
		<div class="resultados">
			<div style="width:740px;">
				<div>
					<div class="tabla">
						<div class="titulo">
							<p>NÚMERO DE PETICIÓN</p>
						</div>
						<div class="titulo">
							<p>CÓDIGO DE LECTOR</p>
						</div>
						<div class="titulo">
							<p>CÓDIGO DE LIBRO</p>
						</div>
						<div class="titulo">
							<p>FECHA DE PRESTAMO</p>
						</div>
						<div class="titulo">
							<p>FECHA DE DEVOLUCIÓN</p>
						</div>
						<div class="infolimdev">
							<p>FECHA LIMITE DE DEVOLUCIÓN</p>
						</div>
					</div>
					<?php
						//consulta en prestamos
						if(isset($cons) && isset($dbTabla)){
							if($dbTabla=="libro" ){
							$consulta = "SELECT * FROM `prestamo` JOIN `libro` ON `codigo_libro`=`codigo` AND `nombre` LIKE '%$cons%'";
							}
							if($dbTabla=="usuario"){
								$consulta = "SELECT * FROM `prestamo` JOIN `usuario` ON `codigo_usuario`=`codigo` AND `nombre` LIKE '%$cons%' ";
							}
						}
						if(isset($dbTabla)  && $dbTabla=="devolver"){
							$consulta = "SELECT * FROM `prestamo` WHERE `fecha_devolucion` IS NULL";
						}
						if (isset($cons) && $cons=="Historial") {
							$consulta = "SELECT * FROM `prestamo` WHERE `fecha_devolucion` IS NOT NULL";
						}						
						$verificar=0;
						if(isset($consulta)){
							$result = $db->query($consulta);							
							if (!$result) {
							    print "    <p>Error en la consulta.</p>\n";
							} else {
							    foreach ($result as $valor) {
							    	$verificar=1;

							    	print "<div class=\"info\">
										<p>$valor[numero_pedido]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[codigo_usuario]</p>\n
									</div>\n";
							        
							        print "<div class=\"info\">
										<p>$valor[codigo_libro]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[fecha_salida]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[fecha_devolucion]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[fecha_limite_devolucion]</p>\n
									</div>\n";
							        
							    }
							}
						}						
						
						$db = null;
						if($verificar==0){
							print "<div class=\"registro\">
									<p>SIN RESULTADOS</p>\n
									<p>DESEA REGISTRAR</p>\n
									<a href=\"../../formularios/prestamo/index.php\" class=\"botregistro\"></a>\n
								</div>\n";
						}
						unset($_REQUEST["consulta"]); 
						unset($_REQUEST["choice"]); 
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="cuadroboton">
		<a href="../../principal/principal.php" class="botonhome"></a>
	</div>
</body>
</html>