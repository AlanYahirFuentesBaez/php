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
<<<<<<< Updated upstream
    include("includes/programaComparacion.php");
=======
        $angelRoba=30;
        $angelLeDaMama=65;
        $sumaDineroAngel=$angelLeDaMama+$angelRoba;
        echo ("El total de Angel es:");
        echo $sumaDineroAngel;

    
        $yahirRoba=1000;
        $yahirLeDaMama=2000;
        $sumaDineroYAhir=$yahirLeDaMama+$yahirRoba;

        echo ("<br>El total de Yahir es:");
        echo $sumaDineroYAhir;

        $yoRobo=2000;
        $miMedan=30;

        $miSuma=$yoRobo+$miMedan;

        echo ("<br>Mi total es:");
        echo $miSuma;


        $migueRoba=300;
        $migueLeDaMama=1000;

        $sumaMigue=$migueRoba+$migueLeDaMama;
        echo ("<br>El total de Migue es:");
        echo $sumaMigue;
       
        if($sumaDineroAngel > $miSuma && $sumaDineroAngel > $sumaMigue && $sumaDineroAngel > $sumaDineroYAhir)
            echo"<br>Angel se dispara las papas y los refrescos";
        else if($miSuma>$sumaDineroYAhir && $miSuma>$sumaMigue && $miSuma>$sumaDineroAngel)
            echo"<br>Andrés se dispara las papas y los refrescos";
        else if($sumaDineroYAhir > $miSuma && $sumaDineroYAhir > $sumaMigue && $sumaDineroYAhir > $sumaDineroAngel)
            echo"<br>Yahir se dispara las papas y los refrescos";
        else if($sumaMigue> $miSuma && $sumaMigue > $sumaDineroYAhir && $sumaMigue> $sumaDineroAngel)
            echo"<br>Migue se dispara las papas y los refrescos";

            if($miSuma<$sumaDineroYAhir || $miSuma<$sumaMigue)
            echo"<br>Andrés se dispara las papas y los refrescos";
        else if($sumaDineroYAhir < $miSuma || $sumaDineroYAhir < $sumaMigue)
            echo"<br>Yahir se dispara las papas y los refrescos";
        else if($sumaMigue< $miSuma || $sumaMigue < $sumaDineroYAhir)
            echo"<br>Migue se dispara las papas y los refrescos";  
            



>>>>>>> Stashed changes
    ?>

    <h1>Genera una URL de búsqueda</h1>
    <?php
    include("includes/urlBusqueda.php");
    ?>

    <h1>Calculo de área y perímetro</h1>
    <?php
    include("includes/figurasGeometricas.php");
    ?>


</body>

</html>