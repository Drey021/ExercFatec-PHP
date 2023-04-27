<?php

    function verificaPrimo($num){
        if($num <= 1){
            return 0; // caso o número seja menor ou igual a 1, retorna 0 pois não é primo
        }
        for($i=2; $i<=$num/2; $i++){
            if($num % $i == 0){
                return 0; // se encontrar um divisor diferente de 1 e do próprio número, retorna 0 pois não é primo
            }
        }
        return 1; // se passar pelo laço de repetição sem encontrar um divisor diferente de 1 e do próprio número, retorna 1 pois é primo
    }
    $num = 7;
    $resultado = verificaPrimo($num);
    if($resultado == 1){
        echo $num . " é primo.";
    } else {
        echo $num . " não é primo.";
    }

?>