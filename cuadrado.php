<?php
include("functions/math.php");
echo "$_POST[base]";

$numLadosCuadrado=4;
$lado="$_POST[base]";
floatval($lado);
$perimetroCuadrado=perimetro($numLadosCuadrado,$lado);
$areaCuadrado=area($lado,$lado);
echo "El area del cuadrado es: $areaCuadrado ";
echo "<br>";
echo "El perimetro del cuadrado es: $perimetroCuadrado";
?>