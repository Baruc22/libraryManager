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
	<link rel="stylesheet" href="styleBuscarLec.css"/>
	<meta charset="utf-8">
	<title>BUSCAR LECTORES</title>
	 
</head>
<body>
	<div class="parteA">
		<div class="buscador">
			<form action="buscarLecphp.php">
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
						<input type="radio" id="opc3" name="choice" value="curp"/>
						<label for="opc3">CURP</label>
					</div>	
					
					<div class="opcion">
						<input type="radio" id="opc4" name="choice" value="telefono"/>
						<label for="opc4">Teléfono</label>
					</div>					
				</div>				
			</form>
		</div>		
	</div>
	<div class="parteB">
		<div class="resultados">
			<div style="width:905px;">
				<div>
					<div class="tabla">
						<div class="titulo">
							<p>CÓDIGO</p>
						</div>
						<div class="tituNom">
							<p>NOMBRE</p>
						</div>
						<div class="tituCurp">
							<p>CURP</p>
						</div>
						<div class="titulo">
							<p>TELÉFONO</p>
						</div>
						<div class="titulo">
							<p>POBLACIÓN</p>
						</div>
						<div class="titulo">
							<p>DIRECCIÓN</p>
						</div>
						<div class="titulo">
							<p>FECHA DE NACIMIENTO</p>
						</div>

					</div>
					<?php
						// CONSULTA LECTORES
						if(isset($columTabla) && isset($cons) && $columTabla=="nombre"){
							$consulta = "SELECT * FROM `usuario` WHERE $columTabla LIKE '%$cons%' OR `apellido_paterno` LIKE '%$cons%' OR `apellido_materno` LIKE '%$cons%'";
						}
						if(isset($columTabla) && isset($cons) ){
							$consulta = "SELECT * FROM `usuario` WHERE $columTabla LIKE '%$cons%'";
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
										<p>$valor[nombre] $valor[apellido_paterno] $valor[apellido_materno]</p>\n
									</div>\n";
							        
							        print "<div class=\"infoCurp\">
										<p>$valor[curp]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[telefono]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[poblacion]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[direccion]</p>\n
									</div>\n";

									print "<div class=\"info\">
										<p>$valor[fecha_nacimiento]</p>\n
									</div>\n";				        
							    }
							}
						}						

						$db = null;
						if($verificar==0){
							print "<div class=\"registro\">
									<p>SIN RESULTADOS</p>\n
									<p>DESEA REGISTRAR</p>\n
									<a href=\"../../formularios/usuario/index.php\" class=\"botregistro\"></a>\n
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