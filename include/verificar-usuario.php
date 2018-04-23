<?php
session_start();
//COMPRUEBA QUE EL USUARIO HAYA INICIADO SESION
if(!isset($_SESSION["ID_Usuario"]) || $_SESSION["ID_Usuario"]==null){
	//SI NO INICIO SESION REDIRIGE A PAGINA DE ACCESO
	header("Location: iniciar-sesion.php");
}
else{
	//SI INICIO SESION
	//OBTENER INFORMACION DE USUARIO LOGGEADO
	$usuario = mysqli_query($conn, "SELECT * FROM usuarios WHERE ID = '".$_SESSION["ID_Usuario"]."'");
	while ($u = mysqli_fetch_array($usuario)){
		define("ID",$u["ID"]);
		define("Usuario",$u["Usuario"]);
		define("Nombres",$u["Nombres"]);
	}
	
}

?>