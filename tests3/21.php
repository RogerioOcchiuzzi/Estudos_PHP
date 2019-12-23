<?php

function testFunction(int $testInt = null, 
        $testString = "string",
        $testBool = false){

        var_dump($testInt);
        var_dump($testString);
        var_dump($testBool);
}

testFunction( 0 );
testFunction( 0 , "test" );
//testFunction( ,,);//error
//testFunction( ,, 0);//error
testFunction();