<?php
class alCuadrado{
private $numero;
function alCuadrado(){
$this->numero = 4;
}
function calcularCuadrado(){
return $this->numero * $this->numero;
}
}
?>

<?php
class alCuadrado {
private $numero;
function __construct($cifra){
$this->numero = $cifra;
}
function calcularCuadrado(){
return ($this->numero * $this->numero);
}
}
?>


<?php
class alCuadrado{
private $numero;
function calcularCuadrado(){
$this->resultado = $cifra * $cifra;
return ($this->resultado);
}
}
?>



<?php
class alCuadrado {
public $cifra;
function calcularCuadrado(){
return ($this->cifra * $this->cifra);
}
}
?>