<?php 
session_start();

$correo_formu = $_POST['correo'];
$clave_formu = $_POST['clave'];

if ($correo_formu == 'cliente@gmail.com' && $clave_formu == 'phpintermedio') {
	$_SESSION['clientes']=$correo_formu;
	header('location: clientes.php?ok#contenido');
}else{
	header('Location: clientes.php?error#contenido');
}
?>



