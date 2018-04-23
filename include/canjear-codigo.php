<?php
require("conectar.php");
require("verificar-usuario.php");

//CANJEA CODIGO CON ID
if(isset($_GET["id"]) && is_numeric($_GET["id"])){
	$sql = "UPDATE codigos SET `Canjeado` = '1' WHERE ID = '".$_GET["id"]."'";
	if($conn->query($sql)===true){
		echo "<script>alert('Codigo canjeado correctamente.'); window.location='/codigos-promocionales.php';</script>";
	}
	else{
		echo "<script>alert('Ocurrio un error.'); window.location='/codigos-promocionales.php';</script>";
	}
}



?>