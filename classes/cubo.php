<?php
class alCubo extends Cuadrado{
    function elevaAlCubo(){
        return ($this->elevaAlCuadrado() * $this->numero);
        }
        }
        $cubo = new alCubo();
        $cubo->numero = 3;
        // Podría recibirse desde una variable
        print ("<p>Resultado de ".$cubo->numero." al cuadrado:".$cubo->elevaAlCuadrado()."</p>");
        print ("<p>Resultado de ".$cubo->numero." al cubo:".$cubo->elevaAlCubo()."</p>");
?>