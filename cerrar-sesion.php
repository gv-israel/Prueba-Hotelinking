<?php
session_start();
session_destroy();

echo "<script>alert('Sesion cerrada correctamente.');window.location='iniciar-sesion.php';</script>";
?>