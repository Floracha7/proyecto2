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
    <h2>Catálogo - Unidad V</h2>
    <div id=Botonera>
    <nav id="Botonera_metodo">
        
        <ul>
            <li><a href="catalogo.php?id=sc#control">Sillon Capri</a></li>
            <li><a href="catalogo.php?id=mp#control">Mesa Ipanema</a></li>
           <li><a href="catalogo.php?id=bv#control">Banco Venecia</a></li>
</ul>
</nav>
<?php
if (isset($_GET['id'])){
switch ($_GET['id']) {
    case 'sc':
        $producto ='Sillon Capri';

         $imagen;
         
        $precio =  '$ 345,00';
        $características = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
        echo "<p><strong> Producto:</strong>" .$producto.  "  </p>";
        echo"<strong>Precio:</strong> $precio";
        echo "<p><strong>Características:</strong>" .$características.  "</p>";
        
        echo "<strong>Imagen:</strong> <img src='sillon1.jpg'></img>";



        break;
    case 'mp':
        $producto ='Mesa Ipanema';  
        $precio = '$ 500,00';  
        $características = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie.
        La madera es de origen brasilera. Las medidas son: 120 cms.';
        $imagen = 'ipanema.jpg';
        
           echo "<p><strong> Producto:</strong>" .$producto.  "  </p>";
        echo"<strong>Precio:</strong> $precio";
        echo "<p><strong>Características:</strong>" .$características.  "</p>";
        
        echo "<strong>Imagen:</strong> <img src='ipanema.jpg'></img>";
        break;
    case 'bv':
        $producto = 'Banco Venecia';
        $precio =  '$ 450,00';
        $características = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie.
         La madera es de origen brasilera. Las medidas son: 120 cms.';  
         $imagen = 'venecia.jpg';

           echo "<p><strong> Producto:</strong>" .$producto.  "  </p>";
        echo"<strong>Precio:</strong> $precio";
        echo "<p><strong>Características:</strong>" .$características.  "</p>";
        
        echo "<strong>Imagen:</strong> <img src='venecia.jpg'></img>";
        break;    
                    }
                 }
                    ?>
                    

</div>
  <?php

        

        ?>

    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>

</body>
</html>