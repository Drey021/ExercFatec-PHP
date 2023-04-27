<?php

    function fahrenheitToCelsius($fahrenheit){
        $celsius = ($fahrenheit - 32) * (5/9);
        return $celsius;
    }
    $temp_f = 75.0;
    $temp_c = fahrenheitToCelsius($temp_f);
    echo "$temp_f graus Fahrenheit correspondem a $temp_c graus Celsius";

?>
