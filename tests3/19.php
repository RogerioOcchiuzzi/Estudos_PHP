<?php

function testReturn(?int $intValue): void{

    if(is_null($intValue)){

        print_r('$intValue is null!<br>');
        return;
    }

    if($intValue < 5){

        print_r('$intValue is < 5! = '.$intValue.'<br>');
        return;
    }

    if($intValue < 10){

        print_r('$intValue is < 10! = '.$intValue.'<br>');
        return;
    }

    print_r('$intValue is '.$intValue);
}

testReturn(null);
testReturn(3);
testReturn(7);
testReturn(15);