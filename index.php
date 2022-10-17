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
    <p>Este programa hace comparaciones con el If-Else</p>
    <?php
    include("includes/programaComparacion.php");
    ?>

    <h1>Genera una URL de búsqueda</h1>
    <?php
    include("includes/urlBusqueda.php");
    ?>

    <h1 class="titulos">Cálculo de área y perímetro de figuras geométricas</h1>
    <h2>Selecciona la figura que deseas calcular e ingresa los datos para conocer el perímetro y el área correspondientes.</h2>
    <?php
    include("includes/figurasGeometricas/figurasGeometricas.php");
    ?>


</body>

</html>