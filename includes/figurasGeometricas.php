<form action="index.php" method="post">
    <select id="figura" name="figura">
        <option value="cuad">Calcula Cuadrado</option>
        <option value="rect">Calcula Rectángulo</option>
        <optgroup label="Calcula Triángulo">
            <option value="trian">Equilátero</option>
            <option value="iso">Isóceles</option>
            <option value="esc">Escaleno</option>
        </optgroup>

    </select>
    <input type="submit" value="Calcular Figura">
</form>


<?php
include("functions/math.php");

$seleccionFigura="$_POST[figura]";
echo $seleccionFigura;


if($seleccionFigura=="cuad")
{
    
    echo ' <form action="procesarFigura.php" method="post">  
              <input id="base" type="text" name="base" placeholder="Base...">
              <input id="cuadrado" type="submit" name="cuadrado" value="Cuadrado">    
           </form>';
    

}
else if($seleccionFigura=="rect")
{
  
    
    echo ' <form action="procesarFigura.php" method="post">  
                 <input id="base" type="text" name="base" placeholder="Base...">
                 <input id="altura" type="text" name="altura" placeholder="Altura...">
                 <input id="rectangulo" type="submit" name="rectangulo" value="Rectangulo">    
            </form>';



}
else if($seleccionFigura=="trian")
{
    //programatriangulo(area y perimetro)
    
    echo ' <form action="procesarFigura.php" method="post">  
                 <input id="base" type="text" name="base" placeholder="Base...">
                 <input id="altura" type="text" name="altura" placeholder="Altura...">
                 <input id="triangulo" type="submit" name="triangulo" value="Triangulo">    
            </form>';
    
}
else if($seleccionFigura=="iso"){
    //programatriangulo(area y perimetro)
    
    echo ' <form action="procesarFigura.php" method="post">  
    <input id="base" type="text" name="base" placeholder="Base...">
    <input id="altura" type="text" name="altura" placeholder="Altura...">
    <input id="triangulo" type="submit" name="triangulo" value="Triangulo">    
    </form>';
    echo "<br>";
    echo ' <form action="procesarFigura.php" method="post">  
    <input id="lado1" type="text" name="lado1" placeholder="Lado1...">
    <input id="lado2" type="text" name="lado2" placeholder="Lado2...">
    <input id="lado3" type="text" name="lado3" placeholder="Lado3...">
    <input id="isosceles" type="submit" name="isosceles" value="Isosceles">    
    </form>'; 



    
}
else if($seleccionFigura=="esc"){
    //programatriangulo(area y perimetro)
    
    $numLadosTriangulo=3;
    $alturaTriangulo="$_POST[altura]";
    $base="$_POST[base]";
    floatval($alturaTriangulo);
    floatval($base);
    $perimetroTriangulo=perimetro($numLadosTriangulo,$base);    
    $areaTriangulo=areaTriangulo($base,$alturaTriangulo);
    echo "<br><br>";
    echo "El area del triangulo es: $areaTriangulo";
    echo "<br>";
    echo "El perimetro del triangulo es: $perimetroTriangulo";
    
}


echo "<br>";



?>