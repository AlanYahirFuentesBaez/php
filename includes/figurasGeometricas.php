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


if($seleccionFigura=="cuad"){
    
    echo ' <form action="procesarFigura.php" method="post">  
              <input id="base" type="text" name="base" placeholder="Base...">
              <input id="figura" type="submit" name="figura" value="Calcular cuadrado">    
           </form>';
    

}
else if($seleccionFigura=="rect"){
    //Programa del rectangulo(area y perimetro)
    echo ' <form action="procesarFigura.php" method="post">  
              <input id="base"   type="text" name="base"   placeholder="Base...">
              <input id="altura" type="text" name="altura" placeholder="Altura...">
              <input id="figura" type="submit" name="figura" value="Calcular rectangulo">  
           </form>';
    

}
else if($seleccionFigura=="trian"){
    //programatriangulo(area y perimetro)
    echo ' <form action="procesarFigura.php" method="post">  
              <input id="base"   type="text" name="base"   placeholder="Base...">
              <input id="altura" type="text" name="altura" placeholder="Altura...">
              <input id="figura" type="submit" name="figura" value="Calcular triangulo equilatero">    
           </form>';
    
    
    
}
else if($seleccionFigura=="iso"){
    //programatriangulo(area y perimetro)
    echo '<form action="index.php" method="post">
    <input id="ladoFaltante" type="text" name="ladoFaltante" placeholder="Lado Triángulo...">
    <input type="submit" value="Calcular Figura">
    </form>';
    
    

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