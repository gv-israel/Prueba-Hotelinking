<?php
session_start();
require("include/conectar.php");

//COMPROBAR SI YA INICIO SESION
if(isset($_SESSION["ID_Usuario"])){
	header("Location: index.php");
}

//COMPRUEBA SI SE ENVIO USUARIO Y CONTRASEÑA POR FORMULARIO
if(isset($_POST["usuario"]) && isset($_POST["clave"])){
	//SI SE ENVIO
	//CODIFICA LA CLAVE PARA COMPARAR CON DB
	$clave = base64_encode($_POST["clave"]);
	$usuario = htmlentities(htmlspecialchars(stripslashes(trim($_POST["usuario"]))));
	
	//COMPRUEBA QUE EXISTA EN DB
	$sql = "SELECT * FROM usuarios WHERE Usuario='$usuario' AND Clave='$clave'";
	$resultado=mysqli_query($conn, $sql) or die (mysqli_error());
	if (mysqli_num_rows($resultado)>0)
	{
		if($row=mysqli_fetch_array($resultado)){
			//CREA SESION
			$_SESSION["ID_Usuario"] = $row["ID"];
			echo "<script>alert('Sesion iniciada.'); window.location='index.php';</script>";
		}
	} else {
		echo '<div class="alert alert-warning" role="alert">El usuario o contraseña no son correctos o no existe.</div>';
	}

	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Iniciar Sesion</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
</head>

<body>
	<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-5 m-auto">
		<h1>Iniciar Sesion</h1><br>

		<form method="post" action="" id="iniciar-sesion">
			<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="form-control form-control-lg"><br>
			<input type="password" name="clave" id="clave" placeholder="Contraseña" class="form-control form-control-lg"><br>
			<input type="submit" value="Iniciar Sesion" class="btn btn-primary">
			<p class="float-right">
				Aun no estas registrado? <br>
			<a href="registro.php">Registrate Gratis</a>
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
