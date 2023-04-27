<?php

    $n = 10; //número do termo que deseja obter
    $prev1 = 1;
    $prev2 = 1;
    $current = 0;

    if($n == 1 || $n == 2){
        $current = 1;
    }else{
        for($i = 3; $i <= $n; $i++){
            $current = $prev1 + $prev2;
            $prev2 = $prev1;
            $prev1 = $current;
        }
    }

    echo "O $n-ésimo termo da Sequência de Fibonacci é: $current";

?>
