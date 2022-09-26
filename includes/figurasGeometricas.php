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
include("functions/math.php");

echo "$_POST[base]";
echo "$_POST[altura]";
echo "$_POST[figura]";

$seleccionFigura=$_POST[figura];

if($_POST[figura]=="cuad"){
    $numLadosCuadrado=4;
    $_POST[base]=$lado;
    $perimetroCuadrado=perimetro($numLadosCuadrado,$lado);
    $areaCuadrado=area($lado,$lado);
    echo "El area del cuadrado es: $areaCuadrado ";
    echo "<br>";
    echo "El perimetro del cuadrado es: $perimetroCuadrado";

}
else if($_POST[figura]=="rect"){
    //Programa del rectangulo(area y perimetro)
    $numLadosRectangulo=2;
    $_POST[altura]=$ladoDerecho;
    $_POST[base]=$base;
    
    $ladoRectangulo=$base+$ladoDerecho;
    $perimetroRectangulo=perimetro($numLadosRectangulo,$ladoRectangulo);
    $areaRectangulo=area($base,$ladoDerecho);
    echo "<br><br>";
    echo "El area del Rectangulo es: $areaRectangulo ";
    echo "<br>";
    echo "El perimetro del Rectangulo es: $perimetroRectangulo";

}
else if($_POST[figura]=="trian"){
    //programatriangulo(area y perimetro)
    $numLadosTriangulo=3;
    $_POST[altura]=$alturaTriangulo;
    $_POST[base]=$base;
    $perimetroTriangulo=perimetro($numLadosTriangulo,$base);    
    $areaTriangulo=areaTriangulo($base,$alturaTriangulo);
    echo "<br><br>";
    echo "El area del triangulo es: $areaTriangulo";
    echo "<br>";
    echo "El perimetro del triangulo es: $perimetroTriangulo";
    
}


echo "<br>";



?>