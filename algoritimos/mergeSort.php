<?php
include "funcoesAuxiliares.php";

/* 
complexidade pior caso O(n log n)
complexidade caso médio	O(n log n)
complexidade melhor caso O(n log n)
*/

function mergeSort(array &$arrayValores, int $inicio, int $fim){

    if(isset($arrayValores) && ($inicio < $fim) &&
        $inicio >= 0 &&
        $fim < count($arrayValores) &&
        count($arrayValores) != 0){

            imprimeBonito($arrayValores, '');

            $meio = (int) (($inicio + $fim) / 2);

            mergeSort($arrayValores, $inicio, $meio);
            mergeSort($arrayValores, ($meio + 1), $fim);

            merge($arrayValores, $inicio, $meio, $fim);
    }
    
}

function merge(array &$arrayValores, int $inicio ,int $meio,int $fim ){

    $arrayAuxiliar = $arrayValores;
    $i = $inicio;
    $k = $inicio;
    $j = $meio + 1;

    while($i <= $meio && $j <= $fim){

        imprimeBonito($arrayValores, 'operação ');

        if($arrayAuxiliar[$i] < $arrayAuxiliar[$j]){

            $arrayValores[$k] = $arrayAuxiliar[$i];
            $i++;
        }else{

            $arrayValores[$k] = $arrayAuxiliar[$j];
            $j++;
        }        
        $k++;
    }

    while($i <= $meio){

        imprimeBonito($arrayValores, 'operação ');

        $arrayValores[$k] = $arrayAuxiliar[$i];
        $i++;
        $k++;
    }

    while($j <= $fim){

        imprimeBonito($arrayValores, 'operação ');

        $arrayValores[$k] = $arrayAuxiliar[$j];
        $j++;
        $k++;
    }
}



//$arrayTeste = array(10,9,8,7,6,5,4,3,2,1,0);
$arrayTeste = criaArray(5);
mergeSort($arrayTeste, 0 , (count($arrayTeste) - 1));
imprimeBonito($arrayTeste, '');