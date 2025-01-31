<?php
	//conecta BD
	require_once "conexion.php";
	$db = conectaDB();
	//informacion formulario
	if(isset($_REQUEST["consulta"]) && $_REQUEST["consulta"]!==""){
		$cons=$_REQUEST["consulta"];
	}
	if(isset($_REQUEST["choice"]) && $_REQUEST["choice"]!==""){
		$columTabla=$_REQUEST["choice"];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styleBuscarL.css?v=<?php echo time(); ?>"/>
	<meta charset="utf-8">
	<title>BUSCAR LIBROS</title>
	 
</head>
<body>
	<div class="parteA">
		<div class="buscador">
			<form action="buscarLphp.php">
				<p>BUSCAR: <input type="text" name="consulta" size="60" class="texto"/> </p>
				<p><input class="boton" type="image" src="../imagenes/botBuscar.png"></p>

				<div class="opciones">
					<div class="opcion1">
						<input type="radio" id="opc1" name="choice" value="codigo" checked />
						<label for="opc1">Código</label>
					</div>
					
					<div class="opcion">
						<input type="radio" id="opc2" name="choice" value="nombre"/>
						<label for="opc2">Nombre</label>
					</div>					
					
					<div class="opcion">
						<input type="radio" id="opc3" name="choice" value="autor"/>
						<label for="opc3">Autor</label>
					</div>	
					
					<div class="opcion">
						<input type="radio" id="opc4" name="choice" value="seccion"/>
						<label for="opc4">Sección</label>
					</div>
					<div class="opcion">
						<input type="radio" id="opc5" name="choice" value="libre"/>
						<label for="opc5">Libres</label>
					</div>
					<div class="opcion">
						<input type="radio" id="opc6" name="choice" value="prestado"/>
						<label for="opc6">Prestados</label>
					</div>					
				</div>				
			</form>
		</div>		
	</div>
	<div class="parteB">
		<div class="resultados">
			<div style="width:1550px;">
				<div>
					<div class="tabla">
						<div class="titulo">
							<p>CÓDIGO</p>
						</div>
						<div class="tituNom">
							<p>NOMBRE</p>
						</div>
						<div class="titulo">
							<p>AUTOR</p>
						</div>
						<div class="titulo">
							<p>EDITORIAL</p>
						</div>
						<div class="titulo">
							<p>NÚM. PAG.</p>
						</div>
						<div class="titulo">
							<p>SECCIÓN</p>
						</div>
						<div class="titulo">
							<p>GENERO</p>
						</div>
						<div class="titulo">
							<p>AÑO</p>
						</div>
						<div class="titulo">
							<p>ESTADO</p>
						</div>

					</div>
					<?php
						// CONSULTA LIBROS
						if(isset($cons) && isset($columTabla)){							
							$consulta = "SELECT * FROM `libro` WHERE $columTabla LIKE '%$cons%'";
						}
						if(isset($columTabla) && ($columTabla=="libre" || $columTabla=="prestado")){			
							$consulta = "SELECT * FROM `libro` WHERE `estado`='$columTabla'";
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
										<p>$valor[codigo]</p>\n
									</div>\n";

									print "<div class=\"infoNom\">
										<p>$valor[nombre]</p>\n
									</div>\n";
							        
							        print "<div class=\"info\">
										<p>$valor[autor]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[editorial]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[numero_paginas]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[seccion]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[genero]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[anio_edicion]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[estado]</p>\n
									</div>\n";
							        
							    }
							}
						}						

						$db = null;
						if($verificar==0){
							print "<div class=\"registro\">
									<p>SIN RESULTADOS</p>\n
									<p>DESEA REGISTRAR</p>\n
									<a href=\"../../formularios/libro/index.php\" class=\"botregistro\"></a>\n
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