// strlen()
$cadena = "Hola que tal";
$resultado = strlen($cadena);
//resultado vale 10, la longitud de la cadena


// substr()
$cadena = "Hola que tal";
$prueba1 = substr($cadena,1); //prueba1 vale "ola que tal"
$prueba2 = substr($cadena,2,4); //prueba2 vale "la q"
//Si se le pasa el tercer parámetro en negativo omite esas posiciones al final
$prueba3 = substr($cadena,2,-1); //prueba3 vale "la que ta"
$prueba4 = substr($cadena,-3); //prueba4 vale "tal