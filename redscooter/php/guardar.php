<?php
echo'<title> formulario  </title>';
echo'<link rel="icon" href="">';
echo'<link rel="stylesheet" type="text/css" href="..\css\estil.css" media="screen"/>';
echo'<meta http-equiv="content-type" content="text/html: charset=UFT-8"/>';

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$tipo= $_POST['tipo'];
$telefono = $_POST['telefono'];
$adjunto = $_POST['adjunto'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$otro = $_POST['otro'];

echo"<h2> informacion recibida</h2>";
echo"el nombre del usuario es:".$nombre. "<br>";
echo"los apellidos del cliente:".$apellido. "<br>";
echo"el tipo de marca:".$tipo. "<br>";
echo"el telefono es:".$telefono. "<br>";
echo"la ubicacion es:".$adjunto. "<br>";
echo"la fecha es:".$fecha. "<br>";
echo"la hora es:".$hora. "<br>";
echo"otra opcion es:".$otro. "<br>";
echo"Nieto Antunez";
?>
