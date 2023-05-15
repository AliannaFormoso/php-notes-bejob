<?php
include("formulario.class.php");
// La clase siempre va en un archivo aparte. Es el código que analizamos recién.
$miFormulario = new Formulario();
?>


// leer los valores, luego se veran los getters
<?php
include("formulario.class.php");
$miFormulario = new Formulario();
echo $miFormulario->codigo;
?>

// definir nuevos valores a sus propiedades, luego se veran los setters
<?php
include("formulario.class.php");
$miFormulario = new Formulario();
$miFormulario->campo[0] = "pepe";
?>

// ejecutar sus metodos
<?php
include("formulario.class.php");
$miFormulario = new Formulario();
$miFormulario->enviarCorreo("lector@libro.com","Saludos","Te mando
saludos","hernan@beati.com.ar");
?>