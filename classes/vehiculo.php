<?php
// Declaración de la clase padre “Vehiculo”
class Vehiculo
{
//// atributos publicos
public $velocidadMaxima;
public $potencia;
public $color;
public $peso;
// constructor
function __construct($potencia,$peso)
{
$this->potencia = $potencia;
$this->peso = $peso;
return true;
}
//// metodo relacionPesoPotencia()
function relacionPesoPotencia()
{
if ($this->potencia>0)
{
return ($this->peso/$this->potencia);
}
return -1;
}
} // termina def. clase Vehiculo
?>