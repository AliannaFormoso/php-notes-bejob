<?php
while (list($clave,$valor) = each($_POST["numeros"])){
print("El elemento ".$clave." contiene un ".$valor."<br/> " );
}
?>

<?php
$animales[4] = "Perro";
$animales[5] = "Gato";
$animales[21] = "Tortuga";
$animales[3] = "Hamster";
$animales[45] = "Canario";
foreach ($animales as $valor){
print("<p>El animal actual es ".$valor."</p>");
}
?>

<?php
$animales[4] = "Perro";
$animales[5] = "Gato";
$animales[21] = "Turtle";
$animales[3] = "Hamster";
$animales[45] = "Canario";
foreach ($animales as $clave => $valor) {
print("El elemento de índice: ".$clave." contiene el valor: ".$valor."<br/>");
}
?>
