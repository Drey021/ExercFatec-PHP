<?php

    $n1 = 10;
    $n2 = 20;
    $n3 = 15;

    if ($n1 > $n2 && $n1 > $n3) {
        echo "O maior número é: " . $n1;
    } elseif ($n2 > $n1 && $n2 > $n3) {
        echo "O maior número é: " . $n2;
    } else {
        echo "O maior número é: " . $n3;
    }
    
?>
