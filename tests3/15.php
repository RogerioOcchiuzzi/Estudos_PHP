<?php

/* In PHP 5.6 and later, argument lists may include the ... token 
to denote that the function accepts a variable number of arguments. 
The arguments will be passed into the given variable as an array; for example:
Example #14 Using ... to access variable arguments */
function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4);

?>