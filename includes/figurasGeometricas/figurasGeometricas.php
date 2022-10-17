<form action="index.php" method="post">
    Selecciona la figura geométrica que desees calcular:<br>    
    <select id="figura" name="figura">
        <option value="cuad">Cuadrado</option>
        <option value="rect">Rectángulo</option>
        <optgroup label="Triángulos">
            <option value="trian">Triángulo Equilátero</option>
            <option value="iso">Triangulo Isóceles/Escaleno</option>
        </optgroup>

    </select>
    <input type="submit" value="Seleccionar figura">
</form>
<br><br>


<?php
include("functions/math.php");

$seleccionFigura="$_POST[figura]";
//echo $seleccionFigura;


if($seleccionFigura=="cuad"){
    
    echo ' <form action="includes/figurasGeometricas/procesarFigura.php" method="post">  
              <input id="base" type="text" name="base" placeholder="Ingresa la base del cuadrado">
              <input id="figura" type="submit" name="figura" value="Calcular cuadrado">    
           </form>';
    

}
else if($seleccionFigura=="rect"){
    //Programa del rectangulo(area y perimetro)
    echo ' <form action="includes/figurasGeometricas/procesarFigura.php" method="post">  
              <input id="base"   type="text" name="base"   placeholder="Ingresa la base del rectángulo">
              <input id="altura" type="text" name="altura" placeholder="Ingresa la altura del rectángulo">
              <input id="figura" type="submit" name="figura" value="Calcular rectángulo">  
           </form>';
    

}
else if($seleccionFigura=="trian"){
    //programatriangulo(area y perimetro)
    echo ' <form action="includes/figurasGeometricas/procesarFigura.php" method="post">  
              <input id="base"   type="text" name="base"   placeholder="Ingresa la base del triángulo equilátero">
              <input id="altura" type="text" name="altura" placeholder="Ingresa la altura del triángulo equilátero">
              <input id="figura" type="submit" name="figura" value="Calcular triángulo equilátero">    
           </form>';
    
    
    
}
else if($seleccionFigura=="iso"){
    echo ' <form action="includes/figurasGeometricas/procesarFigura.php" method="post"> 
                <input id="lado1" type="text" name="lado1" placeholder="Ingresa la base/Lado#1 del triángulo">
                <input id="lado2" type="text" name="lado2" placeholder="Ingresa el Lado #2 del triángulo">
                <input id="lado3" type="text" name="lado3" placeholder="Ingresa el Lado #3 del triángulo">
                <input id="altura" type="text" name="altura" placeholder="Ingresa la altura del tríangulo">
                <input id="figura" type="submit" name="figura" value="Calcular triangulo isóceles/escaleno"> 
            </form>';
    
    

   
    
}


echo "<br>";



?>