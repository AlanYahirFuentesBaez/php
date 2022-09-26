<form action="index.php" method="post">
    <input id="base" type="text" name="base" placeholder="Base...">
    <input id="altura" type="text" name="altura" placeholder="Altura...">
    <select id="figura" name="figura">
        <option value="cuad">Calcula Cuadrado</option>
        <option value="rect">Calcula Rectangulo</option>
        <option value="trian">Calcula Triangulo</option>
    </select>
    <input type="submit" value="Calcular Figura">
</form>
<?php
echo "$_POST[base]";
echo "$_POST[altura]";
echo "$_POST[figura]";


echo "<br>";
include("functions/math.php");
$numLadosCuadrado=4;
$numLadosRectangulo=2;
$numLadosTriangulo=3;

$lado=10;

$base=15;
$ladoDerecho=10;
$ladoRectangulo=$base+$ladoDerecho;

$alturaTriangulo=13;



$perimetroCuadrado=perimetro($numLadosCuadrado,$lado);
$areaCuadrado=area($lado,$lado);
echo "El area del cuadrado es: $areaCuadrado ";
echo "<br>";
echo "El perimetro del cuadrado es: $perimetroCuadrado";

//Programa del rectangulo(area y perimetro)
$perimetroRectangulo=perimetro($numLadosRectangulo,$ladoRectangulo);
$areaRectangulo=area($base,$ladoDerecho);
echo "<br><br>";
echo "El area del Rectangulo es: $areaRectangulo ";
echo "<br>";
echo "El perimetro del Rectangulo es: $perimetroRectangulo";


//programatriangulo(area y perimetro)
$perimetroTriangulo=perimetro($numLadosTriangulo,$base);
$areaTriangulo=areaTriangulo($base,$alturaTriangulo);
echo "<br><br>";
echo "El area del triangulo es: $areaTriangulo";
echo "<br>";
echo "El perimetro del triangulo es: $perimetroTriangulo";
?>