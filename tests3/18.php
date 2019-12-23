<?php

//variaveis com carcteres especiais 
//também são aceitas
$coração	=	'Olá,	eu	tenho	um	$coração';
print $coração;



/* It's called Nullable types.
Which defines ?int as either int or null. */
function nullOrInt(?int $arg){
    var_dump($arg);
}

nullOrInt(100);
nullOrInt(null);