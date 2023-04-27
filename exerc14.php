<?php

    function calcularNovoSalario($salario, $percentualReajuste) {
        $reajuste = ($salario * $percentualReajuste) / 100;
        $novoSalario = $salario + $reajuste;
        return $novoSalario;
    }
    $salarioAtual = 2000;
    $percentualReajuste = 10;
    
    $novoSalario = calcularNovoSalario($salarioAtual, $percentualReajuste);
    
    echo "O novo salário é: R$ " . number_format($novoSalario, 2, ',', '.');
    // Saída: O novo salário é: R$ 2200,00
  

?>