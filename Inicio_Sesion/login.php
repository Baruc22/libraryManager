<!DOCTYPE html>
<html>
<head>
    <title>Pantalla de bloqueo</title>
    <link rel="stylesheet" href="estilologin.css"/>
</head>
<body class="fondo">
    <div >
        <div class="contenedor">
            <div class="parte1">
                <div class="panel-title text-center">
                    <img class="LOGO" src="logo.png" alt="LOGO DE LA COMPAÑIA" />
                    <hr class="hr_style">
                    <h2 class="nombre-sistema">Biblioteca Amado Nervo</h2>
                  </div>
            </div>
            <div class="parte2">
                <div class="recuadro">Administradores</div>
                <div class="campos">
                    <form action="validacion.php" method="post" >
                        <div class="rellenar">
                            <input autocomplete="off" name = "ID"  placeholder="Id de administrador" style="text-align: center;width: 100%;margin-bottom: 15px;">
                        </div>
                        <div class="rellenar">
                            <input  type="password" autocomplete="off" name = "CONTRA"  placeholder="Contraseña" style="text-align: center;width: 100%;margin-bottom: 15px;">
                        </div>
                        <div class="boton">
                            <button> Iniciar Sesion </button>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>


