<?php

function test($testString){
    echo "test ".$testString."<br>";
}

//valido
!true ? : test("true") ;

false ? : test("false") ;

/* invalido
true ? test("true"): ;
false ? test("true"): ; */

true ? test("true"): "" ;

$x = null;
$y = "test";

$z = isset($y) && is_null($x);

$w = [ 'w' => isset($x) && is_null($x)];

var_dump($z);
var_dump($w);


function test3($test){

    if(!$x = $test){
        return "Variavel vazia";
    }

    return $x;

}

var_dump(test3(null));
var_dump(test3("test3"));