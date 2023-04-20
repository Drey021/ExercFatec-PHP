<?php

    $distancia = 500; // distância percorrida em km
    $combustivel = 50; // quantidade de combustível consumida em litros
    $consumo = $distancia / $combustivel; // cálculo do consumo médio
    echo "O consumo médio de combustível foi de: " . number_format($consumo, 2, ',', '.') . " km/l";

?>
