<?php

    function distanciaEntrePontos($x1, $y1, $x2, $y2){
        $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
        return $distancia;
    }
    $ponto1 = array(3.0, 4.0);
    $ponto2 = array(6.0, 8.0);
    $distancia = distanciaEntrePontos($ponto1[0], $ponto1[1], $ponto2[0], $ponto2[1]);
    echo "A distância entre os pontos ($ponto1[0], $ponto1[1]) e ($ponto2[0], $ponto2[1]) é $distancia";

?>
