<?php

    $num = 5; //número inteiro positivo

    $fatorial = 1;

    for($i = $num; $i >= 1; $i--){
        $fatorial *= $i;
    }

    echo "O fatorial de $num é: $fatorial";

?>
