<?php 

$printBr = "<br>";
$printX = "X";

$lambdaFunctionTest = function (int $numberTest) use ($printX){
    
    for ($i = 0; $i < $numberTest; $i++) {
        
        echo($printX);
        
    }    
};

$lambdaFunctionTest2 = function (int $numberTest) use ($lambdaFunctionTest, $printBr){
    
    for ($i = 0; $i < $numberTest; $i++) {
        
        $lambdaFunctionTest($i);
        echo($printBr);
        
    }
};

$lambdaFunctionTest2(16);

?>