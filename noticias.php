<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
<link href="estilitos.css" rel="stylesheet"/>
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
    <h2>Noticias - Unidad VI</h2>
    </section>

    <h2>Noticias </h2>

<section id="Noticias">
    
    <?php
        $noticias = array(
           array('titulo'=>'La motivadora historia de Alejandro, el joven que se quedó sin trabajo, estudió programación y hoy es desarrollador web','texto'=>'Alejandro Sabater es un joven de 29 años cuya historia logró cautivar el ojo de los usuarios virtuales por el ejemplo de superación que transmite.','imagen'=>'noticia 1.jpg'),
           array('titulo'=>'Formar programadores también genera dólares','texto'=>'"La industria del software factura en Argentina u$s 3.505 millones de dólares. Dos tercios de esto proviene de exportaciones, con un superávit de u$s 550 millones. Esto explica por qué -auténticamente- es líder en Latinoamérica"','imagen'=>'noticia 2.jpg'),
           array('titulo'=>'Argentina Programa: lanzan cursos gratis de programación para acceder a empleos que pagan $ 267.000','texto'=>'El Gobierno lanzará este martes 30 de agosto Argentina Programa 4.0, una plataforma que capacitará a 70.000 personas en conocimientos básicos de programación.','imagen'=>'noticia 3.jpg'),
           array('titulo'=>'¿Cuánto gana en dólares un programador que recién empieza en Argentina?','texto'=>'Los programadores son altamente demandados en el mercado laboral dado que el mundo cada vez se encuentra más digitalizado y las empresas requieren de empleados que puedan seguirle el paso a los avances tecnológicos.','imagen'=>'noticia 4.jpg'),

        );


        for($i=0; $i<count($noticias);$i++) {

        ?>

        <div id="noti">
                <div id="img"> 
                    <img src="imagenes/<?php echo $noticias [$i] ['imagen']; ?>" alt="imagenes" id="img">
                </div>
                <div id="noticias1">
                    <h3><?php echo $noticias[$i]['titulo'];?> </h3>
                    <p><?php echo $noticias[$i]['texto'];?> </p>
                </div>
        </div>

  <?php } ?>
</div>
</section>
<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>