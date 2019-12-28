<?php

include "funcoesAuxiliares.php";

/* 
complexidade pior caso O(n^2)
complexidade caso médio	O(n^2)
complexidade melhor caso O(n^2)
*/

function insertionSort(array &$arrayValores){

    imprimeBonito($arrayValores, '');

    $tamanho = count($arrayValores);
    $arrayAnterior = $arrayValores;

    for($i = 0; $i < $tamanho ;$i++){

        $iMenor = $i;

        for($iSeguinte = ($i + 1);$iSeguinte < $tamanho; $iSeguinte++){

            if($arrayValores[$iSeguinte] < $arrayValores[$iMenor]){

                $iMenor = $iSeguinte;
                
            }
            imprimeBonito($arrayValores, 'operação ');
        }

        $aux = $arrayValores[$i];
        $arrayValores[$i] = $arrayValores[$iMenor];
        $arrayValores[$iMenor] = $aux;
        imprimeBonito($arrayValores, '');       
    }
}

$arrayTeste = criaArray(5);
//$arrayTeste = array(10,9,8,7,6,5,4,3,2,1,0);
insertionSort($arrayTeste);