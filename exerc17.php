<?php

    function potencia($a, $b) {
        $resultado = 1;
        for ($i = 1; $i <= $b; $i++) {
        $resultado *= $a;
        }
        return $resultado;
    }
    echo potencia(2, 3); // saída: 8
    echo potencia(5, 2); // saída: 25
    
?>