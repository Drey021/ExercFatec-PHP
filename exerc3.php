<?php

    $cat1 = 3; // primeiro cateto
    $cat2 = 4; // segundo cateto
    $hip = sqrt(pow($cat1, 2) + pow($cat2, 2)); // cálculo da hipotenusa
    echo "A hipotenusa desse triângulo é: " . number_format($hip, 2, ',', '.');
    
?>
