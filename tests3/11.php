<?php

//Sanitize the strings

$stringTest = "dfsbsdf'vrv'rwe'fbsdfb\bdfugv\uyh\uvy\uyv\yhv'nullfbd'";

$stringTest = addslashes($stringTest);

echo($stringTest);

$stringTest = 'rgrwe"wergwerg"rgrweg\jb\j\ojbo"ljol\fbdf"';

$stringTest = addslashes($stringTest);

echo("<br><br>".$stringTest);

