<?php

$file = __DIR__."\sub.srt";

if(file_exists($file)){

    $subRaw = file_get_contents(__DIR__."\sub.srt");

   $subRaw = str_replace("<font color=#FFFF00><b>","",$subRaw);
   $subRaw = str_replace("</b></font>","",$subRaw);
   $subRaw = str_replace("<i>","",$subRaw);
   $subRaw = str_replace("</i>","",$subRaw);

   $myfile = fopen("subChanged.srt", "w") or die("Unable to open file!");
   fwrite($myfile, $subRaw);
   fclose($myfile);

}else {

    echo "arquivo não existe";
}
