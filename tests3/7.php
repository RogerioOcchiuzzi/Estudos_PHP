<?php

require('6.php');

Test6::nunberTestFunction1();
Test6::$nunberTest1 = 8;
Test6::nunberTestFunction1();

$t = new Test6(5);
$t->print();
$t->printRecursive($t->getParam());

echo $t->testPrint("egwer");