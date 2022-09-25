<?php
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
            



    ?>