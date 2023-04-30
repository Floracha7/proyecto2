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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <?php 
       $nombre = 'Victoria';
       $edad ='25';
       $SistemaOperativo = 'Linux';

        echo "<h3> Bienvenida ".$nombre." </h3>";
        echo "<p> Usuaria de ".$edad.  " años </p>";
        echo " <p> Ingresando desde el sistema operativo  ".$SistemaOperativo."</p>";
        ?>
    </div>
    <div id="uni4_2">
        <?php
        define("EVALUACIÓN","EVALUACIÓN");
        echo "<P> EVALUACIÓN </P>";
        

        define("INTEGRADORA","INTEGRADORA ");
        echo "<p>INTEGRADORA</p>";


        define("PHP y MySQL","PHP y MySQL");
        echo "<p>PHP y MySQL</p>";
        ?>
     
    </div>
    <div id="uni4_3">
        


       <?php
       $Telefono = '0800-0000-3452';
       echo "<h3><strong> Para mas información comunicarse al ".$Telefono." </strong></h3>";
       
       echo 'Usted puede comunicarse con nosotros en los horarios : Lunes a sabado de 08 am a 14 pm'; 
       $bool = 'true';

    
$aulavirtual = true;

if ($aulavirtual == true) {
    print "<p>Esta capacitacion brinda aulas virtuales de consulta</p>\n";
}

if ($aulavirtual == false) {
    print "<p>Este curso no brinda aulas virtuales de consulta</p>\n";
}

 ?>




    </div>
    <div id="uni4_4">
        <?php

$unidades_totales = 10;
$unidades_cursadas = 7;

echo"<p>Unidades totales: ".$unidades_totales."</p>";
echo"<p>Unidades cursadas: ".$unidades_cursadas."</p>";
echo"<p>Unidades restantes: ".($unidades_totales-$unidades_cursadas)."</p>";

        ?>

    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>