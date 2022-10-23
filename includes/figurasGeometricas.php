<form action="/php/includes/figurasGeometricas.php" method="post">
    Selecciona la figura geométrica que desees calcular:<br>
    <select id="figura" name="figura">
<<<<<<< HEAD
        <option value="cuad">Calcula Cuadrado</option>
        <option value="rect">Calcula Rectángulo</option>
        <optgroup label="Calcula Triángulo">
            <option value="trian">Equilátero</option>
            <option value="iso">Isóceles/Escaleno</option>
           
=======
        <option value="cuad">Cuadrado</option>
        <option value="rect">Rectángulo</option>
        <optgroup label="Triángulos">
            <option value="trian">Triángulo Equilátero</option>
            <option value="iso">Triangulo Isóceles/Escaleno</option>
>>>>>>> Migue
        </optgroup>

    </select>
    <input type="submit" value="Seleccionar figura">
</form>
<br><br>

<?php
$seleccionFigura="$_POST[figura]";
//echo $seleccionFigura;


if($seleccionFigura=="cuad")
{
    
<<<<<<< HEAD
    echo ' <form action="procesarFigura.php" method="post">  
              <input id="base" type="text" name="base" placeholder="Base...">
              <input id="cuadrado" type="submit" name="cuadrado" value="Cuadrado">    
=======
    echo ' <form action="figurasGeometricas/procesarFigura.php" method="post">  
              <input id="base" type="text" name="base" placeholder="Ingresa la base del cuadrado">
              <input id="figura" type="submit" name="figura" value="Calcular cuadrado">    
>>>>>>> Migue
           </form>';
    

}
<<<<<<< HEAD
else if($seleccionFigura=="rect")
{
  
    
    echo ' <form action="procesarFigura.php" method="post">  
                 <input id="base" type="text" name="base" placeholder="Base...">
                 <input id="altura" type="text" name="altura" placeholder="Altura...">
                 <input id="rectangulo" type="submit" name="rectangulo" value="Rectangulo">    
            </form>';


=======
else if($seleccionFigura=="rect"){
    //Programa del rectangulo(area y perimetro)
    echo ' <form action="figurasGeometricas/procesarFigura.php" method="post">  
              <input id="base"   type="text" name="base"   placeholder="Ingresa la base del rectángulo">
              <input id="altura" type="text" name="altura" placeholder="Ingresa la altura del rectángulo">
              <input id="figura" type="submit" name="figura" value="Calcular rectángulo">  
           </form>';
    
>>>>>>> Migue

}
else if($seleccionFigura=="trian")
{
    //programatriangulo(area y perimetro)
<<<<<<< HEAD
    
    echo ' <form action="procesarFigura.php" method="post">  
                 <input id="base" type="text" name="base" placeholder="Base...">
                 <input id="altura" type="text" name="altura" placeholder="Altura...">
                 <input id="triangulo" type="submit" name="triangulo" value="Triangulo">    
            </form>';
    
}
else if($seleccionFigura=="iso"){
    //programatriangulo(area y perimetro)
    
    echo ' <form action="procesarFigura.php" method="post">  
    <input id="altura" type="text" name="altura" placeholder="Altura...">
    <input id="lado1" type="text" name="lado1" placeholder="Lado1...">
    <input id="lado2" type="text" name="lado2" placeholder="Lado2...">
    <input id="lado3" type="text" name="lado3" placeholder="Lado3...">
    <input id="triangulo" type="submit" name="isosceles" value="Triangulo">    
    </form>';
    echo "<br>";
   
}
=======
    echo ' <form action="figurasGeometricas/procesarFigura.php" method="post">  
              <input id="base"   type="text" name="base"   placeholder="Ingresa la base del triángulo equilátero">
              <input id="altura" type="text" name="altura" placeholder="Ingresa la altura del triángulo equilátero">
              <input id="figura" type="submit" name="figura" value="Calcular triángulo equilátero">    
           </form>';
>>>>>>> Migue


}
else if($seleccionFigura=="iso"){
    echo ' <form action="figurasGeometricas/procesarFigura.php" method="post"> 
                <input id="lado1" type="text" name="lado1" placeholder="Ingresa la base/Lado#1 del triángulo">
                <input id="lado2" type="text" name="lado2" placeholder="Ingresa el Lado #2 del triángulo">
                <input id="lado3" type="text" name="lado3" placeholder="Ingresa el Lado #3 del triángulo">
                <input id="altura" type="text" name="altura" placeholder="Ingresa la altura del tríangulo">
                <input id="figura" type="submit" name="figura" value="Calcular triangulo isóceles/escaleno"> 
            </form>';


}

?>
