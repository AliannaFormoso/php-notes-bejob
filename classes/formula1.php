
<?php
// Declaración de la clase hija “Formula1” que hereda de “Coche”
class Formula1 extends Carro
{
public $versionDeMotor;
public $controlDeTraccionActiva;
function __construct($potencia,$peso)
{
$this->potencia = $potencia;
$this->peso = $peso;
$this->numeroPuertas = 0;
$this->capacidadMaletero = 0;
return true;
}
}
// creamos un coche (900 CV, 600 Kg)
$objFerrari = new Formula1(900,600);
// calculamos su relacion peso/potencia
echo $objFerrari->relacionPesoPotencia();
?>