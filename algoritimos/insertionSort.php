<?php

include "funcoesAuxiliares.php";

/* 
complexidade pior caso O(n^2)
complexidade caso médio	O(n^2)
complexidade melhor caso O(n)
*/

function insertionSort(array &$arrayValores){


    for($i = 0; $i < count($arrayValores);$i++){

        $aux = $arrayValores[$i];
        $j = $i;

        while( ($j > 0) && ($arrayValores[$j - 1] > $aux) ){

            $arrayValores[$j] = $arrayValores[$j - 1];
            $j -= 1;
            
            imprimeBonito($arrayValores, 'operação ');
        }

        $arrayValores[$j] = $aux;

        imprimeBonito($arrayValores, '');
    }
}



//$arrayTeste = array(10,9,8,7,6,5,4,3,2,1,0);
$arrayTeste = criaArray(5);
insertionSort($arrayTeste);
