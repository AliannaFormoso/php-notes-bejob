<?php
$abierto = fopen ("archivo.txt", " r ");
?>

<?php
$abierto = fopen ("archivo.txt", " r ");
// Aquí leeríamos, o escribiríamos, o añadiríamos algo...
// y finalmente, lo cerraríamos:
fclose ($abierto);
?>

<?php
$archivo = "datos.txt";// La ruta al archivo
$lineas = file($archivo);
// A $lineas lo convertimos en una matriz con tantas celdas como líneas tenía el archivo de texto.
// Ahora, vamos a recorrer esa matriz con un bucle:
for ($i=0; $i<count($lineas); $i++) {

print ("<p>La línea ".($i+1)." contiene: ".$lineas[$i]."</p>");
}
?>


<?php
$archivo = "frases.txt";// La ruta al archivo
$frases = file($archivo);
// A $lineas lo convertimos en una matriz con tantas celdas
// como líneas -renglones- tenía el archivo de texto.
shuffe($frases); 
// Mezclamos el contenido de esa matriz con la función shuffe,
// por lo cual, no sabemos qué frase quedó en el primer lugar, y la mostramos:
echo ("<p>Nuestra frase del día es ".$frases[0]."</p>");
?>

<?php
$archivo = "fotos.txt";
$fotos = file($archivo);
shuffe($fotos);
echo '<img src="fotos/'.$fotos[0].'" width="280"
height="200" />';
?>