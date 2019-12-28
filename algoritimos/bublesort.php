<?php

include "funcoesAuxiliares.php";

/* 
complexidade pior caso O(n^2)
complexidade caso médio	O(n^2)
complexidade melhor caso O(n)
*/

function bubleSort(array &$arrayValores){

    $continua = true;

    imprimeBonito($arrayValores, '');

    while($continua){

        $continua = false;

        for($i = 0; $i < (count($arrayValores) - 1);$i++){

            if($arrayValores[$i] > $arrayValores[$i + 1]){

                $aux = $arrayValores[$i];
                $arrayValores[$i] = $arrayValores[$i + 1];
                $arrayValores[$i + 1] = $aux;

                $continua = true;
            }

            imprimeBonito($arrayValores, 'operação ');
        }

        imprimeBonito($arrayValores, ''); 
    }    
}



//$arrayTeste = array(10,9,8,7,6,5,4,3,2,1,0);
$arrayTeste = criaArray(5);
bubleSort($arrayTeste);