<?php

include "funcoesAuxiliares.php";

/* 
complexidade pior caso O(n^2)
complexidade caso médio	O(n log n)
complexidade melhor caso O(n log n)
*/

function quickSort(&$arrayValores, $esquerda, $direita){

    imprimeBonito($arrayValores, '');

    $indice = partition($arrayValores,$esquerda,$direita);

    if ($esquerda < $indice - 1){

        quickSort($arrayValores, $esquerda, $indice - 1);
    }
        
    if ($indice < $direita){

        quickSort($arrayValores, $indice, $direita);
    }       
}

function partition(&$arrayValores ,$esquerda ,$direita ){

    $pivot=$arrayValores[($esquerda+$direita)/2];

    while ($esquerda <= $direita) 
    {        
        while ($arrayValores[$esquerda] < $pivot){

            $esquerda++;
        }             
                
        while ($arrayValores[$direita] > $pivot){

            $direita--;
        }
                
        if ($esquerda <= $direita) {  

            imprimeBonito($arrayValores, 'operação ');

            $auxiliar = $arrayValores[$esquerda];
            $arrayValores[$esquerda] = $arrayValores[$direita];
            $arrayValores[$direita] = $auxiliar;
            $esquerda++;
            $direita--;
        }
    }
    return $esquerda;
}

//$arrayTeste = array(10,9,8,7,6,5,4,3,2,1,0);
$arrayTeste = criaArray(6);
quickSort($arrayTeste, 0 , (count($arrayTeste) - 1));
imprimeBonito($arrayTeste, '');

