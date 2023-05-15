$sentido[0]="ver";
$sentido[1]="tocar";
$sentido[2]="oir";
$sentido[3]="gustar";
$sentido[4]="oler";

$sentidos = array('ver','tocar','oir','gustar','oler');


$sentido1 = ['ver','tocar','oir','gustar','oler'];

$moneda["españa"]="euro";
 $moneda["francia"]="euro";
 $moneda["usa"]="dolar";

 $moneda=array("espana"=>"euro","francia"=>"euro","usa"=>"dolar");


 foreach($capitales as $clave=>$valor){
echo("CLave: $clave" . "Valor: $valor");
}


$cine = array (
array("Acción", "Infantil", "Terror"), // $cine[0]
array("Batman", "Cars", "It") // $cine[1]
);
for ($i = 0; $i < count($cine); $i++) {
echo "<p><b>Array numero $i</b></p>";
echo "<ul>";
for ($j = 0; $j < 3; $j++) {
echo "<li>".$cine[$i][$j]."</li>";
}
echo "</ul>";
}