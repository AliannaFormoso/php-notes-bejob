$names;
$names="Peter";
$number1=34;
$myBoolean="TRUE";

// concatenation is with "."
print("The username is" . $names)
print "The username is $names"
echo("The username is $names" . "he is " . $number1 . "years old")
echo $names, $number1;

//settype

settype($variable, "new_type");

<?php
$values = "5points";
settype($values, "integer");
?>

// checking value
<?php
var_dump($values); //int(5)
?>


<?php
$un_bool = TRUE; // un valor booleano
$un_str = "foo"; // una cadena de caracteres
$un_str2 = 'foo'; // una cadena de caracteres
$un_int = 12; // un número entero
echo gettype($un_bool); // imprime: boolean
echo gettype($un_str); // imprime: string
//Si este valor es un entero,incrementarlo en cuatro
if (is_int($un_int)) {
    $un_int += 4;
}
// Si $un_bool es una cadena, imprimirla
// (no imprime nada)
if (is_string($un_bool)) {
    echo "Cadena: $un_bool";
}
?>
// define is good for constants

<?php
define("PI", 3.1415926);
define("BR", "<br / > " );
define("CURSO", "Mi curso de PHP");
print(PI);
print(BR);
print(CURSO);
?>

// casting variables 

<?php
$text = "Samsung";
$x = (int)$text;
$y = (boolean)$text;
echo gettype($x);
// Salida: integer
echo gettype($y);
// Salida boolean
?>


// scope 
<?php
$nombre="Angel";
function dameNombre(){
global $nombre;
$nombre="El nombre es " . $nombre;
echo($nombre);
}
dameNombre()
?>

// static 

<?php
function incrementaVariable(){
static $contador=0;
$contador++;
echo $contador."<br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
?>

<?php
var_dump($_SERVER);
?>
