<?php
    //Exercicio 1 A
    $texto = "Ads é mais legal ";
    $texto_maiusculo = strtoupper($texto);
    echo $texto_maiusculo."<br>";

    //Exercicio 1 B
    $texto = "Gosto de cachorros mas não gosto tanto de gatos";
    if (strpos($texto, "não gosto") !== false) {
        echo "O texto 'não gosto' está presente no texto.";
    } else {
        echo "O texto 'não gosto' não está presente no texto.";
    }

    //Exercicio 1 C
    $texto = "Algoritmo é um conjunto de instruções lógicas para resolver um problema";
    $texto_minusculo = strtolower($texto);
    echo $texto_minusculo;

    //Exercicio 1 D 
    $texto = "Os heróis da DC são melhores que os heróis da Marvel";
    $texto_modificado = str_replace("são melhores", "não são melhores", $texto);
    echo $texto_modificado;

?>