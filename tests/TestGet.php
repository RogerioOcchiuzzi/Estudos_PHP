<?php

if(!empty($_GET)){
    
    
    echo("<h1>Survei result</h1>");
    echo("<p>Name: ".$_GET["name"]."</p>".
        "<p>City: ".$_GET["city"]."</p>".
        "<p>State: ".$_GET["selectTag"]."</p>");
    
    var_dump($_GET);
    
}else{
    
    echo("No GET parameters are recievied");
    
    
}
if(!empty($_POST)){
    
    
    echo("<h1>Survei result</h1>");
    echo("<p>Name: ".$_POST["name"]."</p>".
        "<p>City: ".$_POST["city"]."</p>".
        "<p>State: ".$_POST["selectTag"]."</p>");
    
    var_dump($_POST);
    
}else{
    
    echo("No POPST parameters are recievied");
    
    
}