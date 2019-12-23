<?php

$testForEach = array('A', 'B', 'C');

foreach($testForEach as $key => $value){
    
    echo("key: ".$key." value: ".$value."<br>");
    
}

$colors = array("blue", "violet", "black");
$colors2 = ["blue", "violet", "black"];

echo("<br><br>".$colors2[2]);

$colors[3] = "orange";

echo("<br><br>".$colors[3]);

$dictionaries = array("a" => "car",
    "b" => "desktop",
    "c" => "plate"    
);

echo("<br>".$dictionaries["b"]);

$dictionaries["d"] = "tv";

echo("<br>".$dictionaries["d"]);

for($i = 0; $i < count($colors); $i++){
    
    echo("<br>".$colors[$i]);
    
}

foreach ($dictionaries as $value){
    
    echo("<br>$value");
    
}

//var_dump($colors);