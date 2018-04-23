<?php
require("conectar.php");
require("verificar-usuario.php");

//GENERA CODIGO PROMOCIONAL DE 10 CARACTERES
$codigo = "";
 $patron = '1234567890abcdefghijklmnopqrstuvwxyz';
 $max = strlen($patron)-1;
 for($i=0;$i < 10;$i++){
	 $codigo .= $patron{mt_rand(0,$max)};
 }
$codigo = strtoupper($codigo);

$sql = "INSERT INTO `codigos` (`DeUsuario`, `Codigo`, `Canjeado`) VALUES ('".ID."', '$codigo', '0')";
if($conn->query($sql)===true){
	//SI SE INSERTO BIEN
	$cod["Codigo"] = $codigo;
	echo json_encode($cod);
}

?>