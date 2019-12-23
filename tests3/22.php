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