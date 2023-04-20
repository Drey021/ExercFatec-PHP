<?php

    $codigo = 4; // exemplo de código de produto

    switch ($codigo) {
    case 1:
        echo "Alimento não-perecível";
        break;
    case 2:
    case 3:
        echo "Alimento perecível";
        break;
    case 4:
    case 5:
    case 6:
        echo "Vestuário";
        break;
    case 7:
    case 8:
    case 9:
        echo "Limpeza";
        break;
    case 10:
        echo "Utensílios domésticos";
        break;
    case 11:
    case 12:
        echo "Eletrônicos";
        break;
    default:
        echo "Código inválido";
        break;
    }

?>
