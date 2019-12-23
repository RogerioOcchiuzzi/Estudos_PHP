<?php 

$binaryValue = 2;

$arrayTest = array_map(function ($value) use ($binaryValue){
    
    return $binaryValue ** $value;
    
}, [1,2,3,4,5,6,7,8]);


var_dump($arrayTest);

?>