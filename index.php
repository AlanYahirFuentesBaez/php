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
    <p>Que onda soy un mensaje</p>
    <?php
        
        $yahirRoba=400;
        $yahirLeDaMama=10;
        $sumaDineroYAhir=$yahirLeDaMama+$yahirRoba;

        echo ("El total de Yahir es:");
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

        if($miSuma>$sumaDineroYAhir && $miSuma>$sumaMigue)
            echo"<br>Andrés se dispara las papas y los refrescos";
        else if($sumaDineroYAhir > $miSuma && $sumaDineroYAhir > $sumaMigue)
            echo"<br>Yahir se dispara las papas y los refrescos";
        else if($sumaMigue> $miSuma && $sumaMigue > $sumaDineroYAhir)
            echo"<br>Migue se dispara las papas y los refrescos";
            



    ?>
    <h1>Genera una URL de búsqueda</h1>
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



    <script>
        function generaUrl() {
            var terminoBusqueda = document.getElementById("bsq").value;
            var orden = document.getElementById("orderBy").value;
            var numElementos = document.getElementById("pageSize").value;
            document.getElementById('resultado').innerHTML = '<p>https://dpstreet.mx/bsq/' + terminoBusqueda + '?' +
                orden + '&' + numElementos + '</p>';
        }
    </script>
</body>

</html>