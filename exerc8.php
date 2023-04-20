<?php

    // lê os valores de peso e altura
    $peso = 70; // em kg
    $altura = 1.75; // em metros

    // calcula o IMC
    $imc = $peso / ($altura * $altura);

    // verifica a condição
    if ($imc < 18.5) {
        $condicao = "Abaixo do peso";
    } elseif ($imc <= 25) {
        $condicao = "Peso normal";
    } elseif ($imc <= 30) {
        $condicao = "Acima do peso";
    } else {
        $condicao = "Obeso";
    }

    // mostra o resultado
    echo "Seu IMC é de: " . number_format($imc, 2) . "\n";
    echo "Sua condição é: " . $condicao;
    
?>
