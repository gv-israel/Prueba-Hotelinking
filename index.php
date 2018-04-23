<?php
require("include/conectar.php");
require("include/verificar-usuario.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Cuenta de Usuario</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
    <div class="row">
        <div class="col-xs-12 p-5"><h1>Bienvenido <?php echo Nombres ?><h1></div>
    </div>
    <div class="row">
        <div class="col-sm-3 border-right">
		<ul class="list-group">
			<li class="list-group-item"><a href="index.php">Generar Codigo</a></li>
			<li class="list-group-item"><a href="codigos-promocionales.php">Mis Codigos</a></li>
			<li class="list-group-item"><a href="cerrar-sesion.php" id="cerrar-sesion">Cerrar Sesion</a></li>
		</ul>		
		</div>
        <div class="col-sm-9 p-4">
		
		<p>Puedes generar tus codigos promocionales haciendo click en el boton <strong>GENERAR!</strong> y canjearlos en la seccion <strong>Mis Codigos</strong>.</p>
			
		<div class="text-center">
		<div id="codigoGenerado"></div>
		<button id="generar" class="btn btn-primary btn-lg">GENERAR!</button>
		</div>
		
		</div>
    </div>
</div>
	
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>