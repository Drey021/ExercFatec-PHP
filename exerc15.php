<?php

    function compararNumeros($a, $b) {
        if ($a > $b) {
        return 1;
        } elseif ($b > $a) {
        return -1;
        } else {
        return 0;
        }
    }
    $numero1 = 10;
    $numero2 = 5;
    
    $resultado = compararNumeros($numero1, $numero2);
    
    if ($resultado == 1) {
        echo "$numero1 é maior que $numero2";
    } elseif ($resultado == -1) {
        echo "$numero2 é maior que $numero1";
    } else {
        echo "Os números são iguais";
    }
    // Saída: "10 é maior que 5"
  
?>