<?php

function genA() { 
    yield 20; 
    yield 30; 
    yield 40; 
    return 50;
}

$gen = genA();

foreach($gen as $value){

    echo("<br>".$value."<br>");

}

// Grab the return value 
echo($gen->getReturn()); 

//---------------------------------------------------------

$genObj = function (array $number) { 
    foreach($number as $num) { 
        yield $num * $num; 
    }   
    return "Done calculating the square.";   
}; 
   
$result = $genObj([10, 20, 30, 40, 50]); 
   
foreach($result as $value) { 
    echo("<br>".$value."<br>"); 
} 
   
// Grab the return value 
echo($result->getReturn()); 