
<?php
include("functions/math.php");




    
if($seleccionFigura="$_POST[cuadrado]")
{

echo $seleccionFigura;


$numLadosCuadrado=4;
$lado="$_POST[base]";
floatval($lado);
$perimetroCuadrado=perimetro($numLadosCuadrado,$lado);
$areaCuadrado=area($lado,$lado);
echo "<br>";
echo "El area del cuadrado es: $areaCuadrado ";
echo "<br>";
echo "El perimetro del cuadrado es: $perimetroCuadrado";
echo "<br><br>";
}

else if($seleccionFigura="$_POST[rectangulo]")
{

    echo $seleccionFigura;
   
    $seleccionFigura="$_POST[rectangulo]";

    $numLadosRectangulo=2;
    $ladoDerecho="$_POST[altura]";
    $base="$_POST[base]";
    floatval($ladoDerecho);
    floatval($base);
    
    $ladoRectangulo=$base+$ladoDerecho;
    $perimetroRectangulo=perimetro($numLadosRectangulo,$ladoRectangulo);
    $areaRectangulo=area($base,$ladoDerecho);
    echo "<br><br>";
    echo "El area del Rectangulo es: $areaRectangulo ";
    echo "<br>";
    echo "El perimetro del Rectangulo es: $perimetroRectangulo";
}



?>