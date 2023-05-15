<?php
// Definición de la clase “Coche” que hereda de “Vehículo”
class Carro extends Vehiculo
{
public $capacidadMaletero;
public $numeroPuertas;
//// constructor
function __construct($potencia,$peso,$puertas=5)
{
$this->potencia = $potencia;
$this->peso = $peso;
$this->numeroPuertas = $puertas;
return true;
}
}
// Instanciamos un ejemplar de la clase Coche
$objCoche = new Carro(60,1500);
// Usamos el método relacionPesoPotencia() heredada del padre
echo $objCoche->relacionPesoPotencia();
?>