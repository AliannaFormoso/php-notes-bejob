<?php
include ("alCuadrado.class.php");
$instancia = new alCuadrado();
print ("Elevar el 4 al cuadrado da como resultado: ".
 $instancia->calcularCuadrado());
?>



<?php
include ("alCuadrado.class.php");
$cantidad = 10;
/* Número a elevar (también podría llegar desde un
formulario o enlace que envíe variables a esta página). */
$instancia = new alCuadrado($cantidad);
/* Aquí le pasamos el número en el momento en que se
ejecuta el método constructor.*/
print ("Elevar ".$cantidad." al cuadrado da: " ) ;
echo $instancia->calcularCuadrado();
?>



<?php
include ("alCuadrado.class.php");
$instancia = new alCuadrado();
print ("Resultado: ".$instancia->calcularCuadrado(100));
/* Número a elevar (podría llegar desde un formulario o enlace
que envíe variables a esta página). */
?>



<?php
include ("alCuadrado.class.php");
$resultado = new alCuadrado();
$resultado->cifra = 45;
/* Aquí le defnimos una propiedad como si fuera
una variable interna, de alcance local. */
print ("Resultado: ".$resultado->calcularCuadrado());
?>