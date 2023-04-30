<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos - Unidad VIII</h2>
    <div id="registro">
        <form action="enviar_consulta.php" method="POST">
      <input name="nombre" type="text" placeholder="Ingresar nombre">
      <input name="apellido" type="text" placeholder="Ingresar apellido">
      <input name="correo" type="email" placeholder=" Ingresar correo">
      <textarea name="consulta" placeholder="Introduzca su consulta"></textarea>
      <input type="submit" value="Ingresar" >
    </form>
    <?php
    if (isset($_GET['ok_bd'])) {
        echo "<p> Gracias por tu consulta, en breve te contactaremos!</p>";
        # code...
    }

    ?>
   
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>