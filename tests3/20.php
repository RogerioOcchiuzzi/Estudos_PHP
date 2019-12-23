<?php

function testBreak(int $intValue){

    $intIterator = 0;

    echo '$intValue is '.$intValue.'<br>';

    while($intIterator < $intValue){

        echo $intIterator.'<br>';
        $intIterator++;

        //nunca deixa passar de 10
        if($intIterator > 10){
            break;
        }
    }


}

testBreak(20);