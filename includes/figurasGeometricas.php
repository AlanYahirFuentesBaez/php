<input id="bsq" type="text" name="busqueda" placeholder="Buscar...">
<select id="orderBy" name="select">
    <option value="orderBy=5">Lo más nuevo primero</option>
    <option value="orderBy=4">Mayor a menor precio</option>
    <option value="orderBy=3">Menor a mayor precio</option>
</select>
<select id="pageSize" name="select">
    <option value="pageSize=12">Mostrar 12 elemento</option>
    <option value="pageSize=24">Mostrar 24 elemento</option>
    <option value="pageSize=36">Mostrar 36 elemento</option>
</select>
<input type="submit" value="Generar" onclick="generaUrl()">

<div id="resultado">
</div>
<?php
include("functions/math.php");
$numLadosCuadrado=4;
$numLadosRectangulo=4;
$numLadosTriangulo=3;

$lado=10;

$perimetroCuadrado=perimetro($numLadosCuadrado,$lado);
$areaCuadrado=area($lado,$lado);
echo "El area del cuadrado es: $areaCuadrado ";
echo "El perimetro del cuadrado es: $perimetroCuadrado";

//Programa del rectangulo(area y perimetro)
$perimetroRectangulo=perimetro($numLadosRectangulo,$base);
$areaRectangulo=area($base,$altura);
echo "El area del Rectangulo es: $baseRectangulo ";
echo "El perimetro del Rectangulo es: $perimetroRectangulo";


//programatriangulo(area y perimetro)
$perimetrotriangulo=perimetro($numLadostriangulo,$Base);
$areatriangulo=area($Base,altura$);
echo "El area del triangulo es: $basetriangulo ";
echo "El perimetro del triangulo es: $perimetrotriangulo";
?>