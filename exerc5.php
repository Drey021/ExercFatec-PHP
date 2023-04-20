<?php

    $valor_produto = 100; // valor original do produto
    $desconto = $valor_produto * 0.35; // cálculo do desconto
    $valor_com_desconto = $valor_produto - $desconto; // cálculo do valor do produto com desconto
    echo "O valor do produto com desconto é de: R$ " . number_format($valor_com_desconto, 2, ',', '.');
    
?>