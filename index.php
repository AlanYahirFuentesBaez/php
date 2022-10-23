<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Estos son los programas que vamos haciendo.</h1>
    <form action="index.php" method="post">
        selecciona el que quieras ver:<br>
        <select id="programa" name="programa">
            <option value="pro1">Comparación If-Else</option>
            <option value="pro2">Generar URL </option>
            <option value="pro3"> Calcular área y perímetro</option>

        </select>
        <input type="submit" value="Seleccionar programa">
    </form>

    <?php            
    $seleccionPrograma="$_POST[programa]";
    
    if($seleccionPrograma=="pro1"){
        echo '<h1>Este programa hace comparaciones con el If-Else</h1>';
        include("includes/programaComparacion.php");
        
    }
    else if($seleccionPrograma=="pro2"){
        echo '<h1>Genera una URL de búsqueda</h1>';
        include("includes/urlBusqueda.php");
    
    }    
    else if($seleccionPrograma=="pro3"){
        echo '<h1 class="titulos">Cálculo de área y perímetro de figuras geométricas</h1>';
        echo '<h2>Selecciona la figura que deseas calcular e ingresa los datos para conocer el perímetro y el área
            correspondientes.</h2>';
        include("includes/figurasGeometricas/figurasGeometricas.php");
        
    }
?>

</body>

</html>