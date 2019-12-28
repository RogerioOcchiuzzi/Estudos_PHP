<?php

/* 
complexidade caso médio	O(log n)
complexidade melhor caso O(1)
*/

function binarySearch(array &$arrayValores, int $buscarValor){

    $indiceEsquerdo = 0;
    $indiceDireito = count($arrayValores) - 1;
    $meio;
    echo "Valor $buscarValor <br>";

    while($indiceEsquerdo <= $indiceDireito){

        $meio = round(($indiceEsquerdo + $indiceDireito) / 2);
        
        if($buscarValor == $arrayValores[$meio]){

            echo "Valor $buscarValor";
            break;
        }
        if($buscarValor < $arrayValores[$meio]){
            $indiceDireito = $meio - 1;
        }else{

            $indiceEsquerdo = $meio + 1;
        }

        echo $meio."<br>";
    }
}


function criaArray(): array {

    $arrayValores = array();

    for($i = 1; $i <= 1000; $i++){
        $arrayValores[$i - 1] = $i;
    }

    return $arrayValores;
}

$arrayTeste = criaArray();
binarySearch($arrayTeste, random_int(1, 1000));