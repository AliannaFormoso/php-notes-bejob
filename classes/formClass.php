<?php
class Formulario {
private $campo;
public $codigo;
function __construct(){
print "Esto es el constructor de la clase Formulario";
}
function mostrarFormulario(){
$this->codigo='<form method="post" action="procesa.php">
<fieldset>
<label>Destino: <input type="text" name="destino"/></label>
<label>Asunto: <input type="text" name="asunto"/></label>
<label>Mensaje: <textarea name="mensaje" cols="10" rows="30"/></textarea></label>
<label>Remitente: <input type="text" name="remite" /></label>
}
$remite)
<input type="submit" value="Enviar" />
</feldset>
</form>';
return($this->codigo);
function enviarCorreo($destino, $asunto, $mensaje,$remite);
{
$this->campo[0]= $destino;
$this->campo[1]= $asunto;
$this->campo[2]= $mensaje;
$this->campo[3]= $remite;
return($this->campo);
}}}
?>