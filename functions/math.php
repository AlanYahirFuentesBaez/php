<?php
function area($base, $altura) {
    $area=$base*$altura;
    return $area;
}

function areaTriangulo($base, $altura) {
    $areaT=($base*$altura)/2;
    return $areaT;
}


function perimetro($numLados, $lado) {
    $perimetro=$numLados*$lado;
    return $perimetro;

}

function perimetroIsoEsc($lado1, $lado2, $lado3) {
    $perimetroIsoEsc=$lado1+$lado2+$lado3;
    return $perimetro;

}


?>