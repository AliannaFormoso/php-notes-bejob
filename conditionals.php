<?php
if ($_POST["password"] == "admin123") {
echo "<h1>Password correcto</h1>";
}
?>

// tertiary operator


// switch case 
switch ($dia){
case "lunes":
$texto = "¡Feliz día de la Luna!";
break;
case "martes":
$texto = "¡Feliz día de Marte!";
break;
case "miércoles":
$texto = "¡Feliz día de Mercurio!";
break;
case "jueves":
$texto = "¡Feliz día de Júpiter!";
break;
case "viernes":
$texto = "¡Feliz día de Venus!";
break;
case "sábado":
$texto = "¡Feliz día de Saturno!";
break;
case "domingo":
$texto = "¡Feliz día del Sol!";
break;
default:
$texto = "¡Feliz día fuera de calendario!";
break;
}
print ($texto); 

// ranges 
if ($_POST["edad"] >= 18 and $_POST["edad"] <= 65){
print ("Está en el rango solicitado");
} else {
print ("Fuera del rango");
}


// Disyunción excluyente
/* si pagamos con tarjeta VISA, no se
considerará ningún cupón de descuento. Por el contrario, si ingresa un cupón de
descuento, la forma de pago no puede ser VISA. Son excluyentes:*/

if ($tarjeta == "VISA" xor $cupon <> ""){
print ("Podemos tomar su pedido");
} else {
print ("No puede elegir VISA y a la vez colocar un
código de cupón de descuento, y tampoco puede elegir otro medio
de pago sin ingresar un código de cupón.");
}

<?php
$total = 145; // supongamos que esto llegaría desde un formulario
if ($total > 0 and $total <= 500){
if ($total <= 100){
print ("¡Muy barato! Menos de 100 euros...");
} elseif ($total <= 200){
print ("Buen precio, entre 101 y 200 euros.");
} elseif ($total <= 500){
print ("Algo caro, entre 201 y 500 euros.");
}
} else {
print
("El valor está fuera del rango permitido de 1 a 500 euros.");
}
?>

