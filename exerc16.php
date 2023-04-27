<?php

    function calcula_media($NP1, $NP2, $NT1, $NT2) {
        $MF = ($NP1 + $NP2 + 2 * $NT1 + 2 * $NT2) / 6;
        
        if ($MF >= 7) {
        return 1; // aprovado
        } else {
        return 0; // reprovado
        }
    }
    $resultado = calcula_media(7.5, 8.0, 9.0, 7.5);
    if ($resultado == 1) {
        echo "Aprovado!";
    } else {
        echo "Reprovado!";
    }
    
?>