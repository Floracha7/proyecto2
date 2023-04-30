<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$consulta = $_POST['consulta'];

include("conexion.php");

mysqli_query($datos_bd, "INSERT INTO consultas VALUES (DEFAULT, '$nombre', '$apellido', '$correo', '$consulta' )");

header("location: contacto.php?ok_bd");




?>