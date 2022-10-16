<?php
include("functions/math.php");

$opcion="$_POST[figura]";
echo "$opcion";


if($opcion=="Calcular cuadrado"){
    
    echo "<h1>Este es el cálculo de tu cuadrado</h1>";
    $numLadosCuadrado=4;
    $lado="$_POST[base]";
    floatval($lado);
    $perimetroCuadrado=perimetro($numLadosCuadrado,$lado);
    $areaCuadrado=area($lado,$lado);
    echo "El area del cuadrado es: $areaCuadrado ";
    echo "<br>";
    echo "El perimetro del cuadrado es: $perimetroCuadrado";

}

else if($opcion=="Calcular rectangulo"){
    echo "<h1>Este es el cálculo de tu rectángulo</h1>";
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

else if($opcion=="Calcular triangulo equilatero"){
    echo "<h1>Este es el cálculo de tu triángulo equilátero</h1>";
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
else if($opcion=="Calcular triangulo isoceles/escaleno"){

    $numLadosTriangulo=3;
    $lado1="$_POST[lado1]";
    $lado2="$_POST[lado2]";
    $lado3="$_POST[lado3]";
    $altura="$_POST[altura]";
    floatval($lado1);
    floatval($lado2);
    floatval($lado3);
    floatval($altura);
    $perimetroTriangulo=$lado1 + $lado2 + $lado3;   
    $areaTriangulo=areaTriangulo($lado1,$altura);
    echo "<br><br>";
    echo "El area del triangulo es: $areaTriangulo";
    echo "<br>";
    echo "El perimetro del triangulo es: $perimetroTriangulo";
}
?>