<?php

$a	=	'Por	valor';
$b	=	&$a;	//	Criando	a	referência	para	$a
$a	=	'E	agora	?';
var_dump($a);	//	E	agora	?
var_dump($b);	//	E	agora	?


$x = 10;
$y = 10;

FUNCTION MudaValor(&$xVar, $yVar){

    $xVar = 20;
    $yVar = 20;

}

MudaValor($x, $y);

var_dump($x);
var_dump($y);

//As keyword não são case sensitive
CLASS TESTCASE{

    PUBLIC $VAR_TEST = "test";

    PUBLIC FUNCTION __CONSTRUCT(){

        //$this não funciona em caixa alta
        var_dump($this->TEST());


    }

    PRIVATE FUNCTION TEST() : STRING{
        
        //variaveia são case sensitive
        $this->var_test = "TUDO EM CAIXA ALTA";
        RETURN $this->VAR_TEST;

    }


}

//nomes de classes também não são
NEW TESTCASE();

NEW TestCAse();

NEW testcase();