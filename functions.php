<?php
$matriz = file($archivo);
$matriz = file("archivo.txt");

?>

<?php
$num1 = 5;
$num2 = 7;
function suma($num1, $num2){
$resultado=$num1 + $num2;
return $resultado;
}
echo(suma(5,7));

 ?>

<?php
function cuadrado($numero){
$total = $numero * $numero;
return $total;
}
$cantidad = 6;
$resultado = cuadrado($cantidad);
// Ya ejecutamos la función, $resultado almacena un 36
print("<p>".$cantidad. " al cuadrado da: ".$resultado."</p>");
// Mostramos el resultado
?>

<?php
function aumento($precio, $porcentaje){
$total = $precio + ($precio * $porcentaje / 100);
return $total;
}
$resultado = aumento(12.99, 5 );
// Pasamos la misma cantidad de datos que de parámetros tenga la función, en este caso, dos,separados por comas
print("<p>Nuevo precio: ".$resultado."</p>");
?>

<?php 
function escribirArchivo($casilla){
    // Código a ejecutar
    if( fclose($abierto) ){
        return true;
        } else {
        return false;
        }}

        if( escribirArchivo($correo)==true ){
            echo "<p>¡Gracias por suscribirse!</p>";
            } else {
            echo "<p>Error al guardar los datos, intente
            nuevamente</p>";
            }
            
?>

<?php
function inflacion($precio,$suba){
$precio = $precio * $suba;
global $aumento;// Estamos anunciando que nos referiremos a una variable externa a la función
$aumento = 1.50;// Esta línea modifca la variable externa, cada vez que sea llamada esta función
return $precio;
}

$producto1 = 100;
$aumento = 1.10; // Ésta es la variable externa, hasta aquí vale 1.10 ya que aún no llamamos a la función
print("<p>El producto 1 vale: ".$producto1." antes del aumento, y la variable \$aumento
todavía vale:".$aumento."</p>");
$resultado = inflacion($producto1,$aumento);
print("<p>Ahora el producto 1 vale: ".$resultado."</p>");
print("<p>La variable \$aumento después de llamar a la función vale: " ) ;
print($aumento."</p>");
?>

<?php
function multiplicar($numero,$otro){
$numero = $numero * $otro;
$GLOBALS ["cifraB"] = 9; // Estamos cambiando una variable de fuera de la función
return $numero;
}
$cifraA = 100;
$cifraB = 5;
print("<p>El primer número vale: ".$cifraA."</p>"); //vale 100
print("<p>El segundo número (o sea, \$cifraB) vale:".$cifraB."</p>");// vale 5
print("<p>La multiplicación da como resultado: " ) ;
$resultado = multiplicar($cifraA,$cifraB);
print($resultado."</p>"); // muestra 500
print("<p>Y ahora, \$cifraB luego de ejecutar la función vale:".$cifraB."</p>");// ahora vale 9
?>