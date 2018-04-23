<?php
session_start();
session_destroy();

echo "<script>alert('Sesion cerrada correctamente.');</script>";
header("Location: iniciar-sesion.php");
?>