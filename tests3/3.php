<?php

echo ("Value: ".(string) 0xfaaabdcaa ." Lengh: " );
echo (strLen((string) 0xfaaabdcaa ));
echo ("<br>");

$text = ' How can a clam cram in a clean cream can? ';

/* 
echo ("$text<br>");
echo (strLen((string) $text )); // 43
echo ("<br>");

$text = trim($text);
echo ($text); // How can a clam cram in a clean cream can?
echo ("<br>");

echo (strLen($text)); // 41
echo ("<br>");

echo (strToUpper($text)); // HOW CAN A CLAM CRAM IN A CLEAN CREAM CAN?
echo ("<br>");

echo (strToLower($text)); // how can a clam cram in a clean cream can?
echo ("<br>");

$text = str_replace('can', 'could', $text);
echo ($text); // How could a clam cram in a clean cream could?
echo ("<br>");

echo (subStr($text, 2, 6)); // w coul
echo ("<br>");

var_dump(strPos($text, 'can')); // false
var_dump(strPos($text, 'could')); // 4
 */
var_dump(str_split($text, 10));
var_dump(explode(" ", $text));