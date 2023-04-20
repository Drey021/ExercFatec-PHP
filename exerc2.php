<?php

    $dolar = 50; // valor em Dólar
    $cotacao = 5.20; // cotação atual do Dólar
    $real = $dolar * $cotacao; // conversão para Real
    echo "O valor de US$ $dolar equivale a R$ " . number_format($real, 2, ',', '.');

?>
