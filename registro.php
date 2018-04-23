<?php
session_start();
require("include/conectar.php");

//COMPROBAR SI YA INICIO SESION
if(isset($_SESSION["ID_Usuario"])){
	header("Location: index.php");
}

//COMPRUEBA SI SE ENVIO USUARIO, CONTRASEÑA Y NOMBRES POR FORMULARIO
if(isset($_POST["usuario"]) && isset($_POST["clave"]) && isset($_POST["nombres"]) && $_POST["usuario"]!=null && $_POST["clave"]!=null && $_POST["nombres"]!=null){
	//SI SE ENVIO
	//CODIFICA LA CLAVE PARA COMPARAR CON DB
	$clave = base64_encode($_POST["clave"]);
	$usuario = $_POST["usuario"];
	$nombres = $_POST["nombres"];
	
	//INSERTA DATOS DE REGISTRO
	$sql = "INSERT INTO usuarios (`Nombres`, `Usuario`, `Clave`) VALUES ('$nombres', '$usuario', '$clave');";
	if($conn->query($sql)===true){
		echo "<script>alert('Cuanta de usuario creada correctamente. Ahora puedes iniciar sesion.'); window.location='/iniciar-sesion.php';</script>";
	}
	else{
		echo "<script>alert('Ocurrio un error, revisa que los datos esten correctamente introducidos.'); window.location='/registro.php';</script>";
	}

	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registrarse</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>

<body>
	<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-5 m-auto">
		<h1>Registrarse</h1><br>

		<form method="post" action="" id="registrarse">
			<input type="text" name="nombres" id="nombres" placeholder="Nombre y Apellido" class="form-control form-control-lg"><br>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control form-control-lg"><br>
			<input type="password" name="clave" id="clave" placeholder="Contraseña" class="form-control form-control-lg"><br>
			<input type="submit" value="Registrarse" class="btn btn-primary">
			<p class="float-right">
				Ya estas registrado? <br>
			<a href="iniciar-sesion.php">Iniciar sesion</a>
			</p>
		</form>
			
		</div>
    </div>
</div>
	

	
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
