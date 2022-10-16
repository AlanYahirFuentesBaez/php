
<?php
include("functions/math.php");


$seleccionFigura="$_POST[figura]";
echo $seleccionFigura;

    
if($seleccionFigura="$_POST[cuadrado]")
{




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


else if($seleccionFigura="$_POST[triangulo]")

{

    
    $numLadosTriangulo=3;
    $base="$_POST[base]";
    $alturaTriangulo="$_POST[altura]";
       
    floatval($alturaTriangulo);
    floatval($base);
    $perimetroTriangulo=perimetro($numLadosTriangulo,$base);    
    $areaTriangulo=areaTriangulo($base,$alturaTriangulo);
    echo '<br>';
    echo "El area del triangulo es: $areaTriangulo";
    echo '<br>';
    echo " El perimetro del triangulo es: $perimetroTriangulo ";

}

else if($seleccionFigura="$_POST[isosceles]")
{
    //programatriangulo(area y perimetro)
    
    

    $numLadosTriangulo=3;
    $alturaTriangulo="$_POST[altura]";
    $base="$_POST[base]";
    floatval($alturaTriangulo);
    floatval($base);
    $lado1="$_POST[lado1]";
    $lado2="$_POST[lado2]";
    $lado3="$_POST[lado3]";
    floatval($lado1);
    floatval($lado2);
    floatval($lado2);

    $perimetroIsoEsc=perimetroIsoEsc($lado1+$lado2+$lado3);    
    $areaTriangulo=areaTriangulo($base,$alturaTriangulo);

    echo "<br><br>";
    echo "El area del triangulo es: $areaTriangulo";
    echo "<br>";
    echo "El perimetro del triangulo es: $perimetroIsoEsc";
    
}


?>