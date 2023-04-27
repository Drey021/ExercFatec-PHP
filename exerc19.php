<?php

    function isPalindromo($num) {
        $numStr = strval($num);
        $len = strlen($numStr);
    
        for ($i = 0; $i < $len/2; $i++) {
        if ($numStr[$i] != $numStr[$len-$i-1]) {
            return 0;
        }
        }
    
        return 1;
    }
    $num1 = 12321;
    $num2 = 12345;
    
    echo isPalindromo($num1); // retorna 1
    echo isPalindromo($num2); // retorna 0

?>