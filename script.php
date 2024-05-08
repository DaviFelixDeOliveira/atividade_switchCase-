<?php


$favcolor = $_POST['favcolor'];
switch ($favcolor) {
    case 'vermelho':
        echo "cor é verelho";
        break;
    case 'azul':
        echo "cor é asul";
        break;
    case 'verde':
        echo "cor é verdi";
        break;
    
        default:
        echo "cor não é nenhuma dessas aí";
        break;
}




?>