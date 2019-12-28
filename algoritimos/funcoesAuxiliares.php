<?php

function imprimeBonito(array $arrayValores, string $indicador){

    echo $indicador."[";

    foreach($arrayValores as $key => $value){

        echo " $value,";

    }
    //echo "]\n";
    echo "]<br>";
}

function criaArray(int $tamanho): array {

    $arrayValores = array();

    for($i = 0; $i < $tamanho; $i++){

        $arrayValores[$i] = random_int(0, 1000);
    }

    return $arrayValores;

}