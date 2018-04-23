<?php
$conServidor = "localhost";
$conUsuario = "root";
$conClave = "123456";
$conNombreDB = "pruebahotel";

//CREA CONECCION
$conn = new mysqli($conServidor, $conUsuario, $conClave, $conNombreDB);

//COMPRUEBA CONECCION
if ($conn->connect_error) {
    die("Connection fallida: " . $conn->connect_error);
} 
mysqli_set_charset($conn,"utf8");
?>