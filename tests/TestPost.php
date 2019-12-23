<?php

if(!empty($_POST)){
    
    $result = 0;    
    $operationPost = $_POST["selectTag"];
    $firstValuePost = null;
    $secondValuePost = null;
    
    if(is_numeric($_POST["firstValue"]) && is_numeric($_POST["secondValue"])) {
        
        $firstValuePost = (int) $_POST["firstValue"];
        $secondValuePost = (int) $_POST["secondValue"];        
        
        switch ($operationPost){
            
            case "addition": $result = $firstValuePost + $secondValuePost; break;
            case "subtraction": $result = $firstValuePost - $secondValuePost; break;
            case "mutiplication": $result = $firstValuePost * $secondValuePost; break;
            case "division": $result = $firstValuePost / $secondValuePost; break;
            case "exponential": $result = $firstValuePost ** $secondValuePost; break;
            default:  echo("Error on set operation!");
            
        }
        
        echo("<h1>Result: $result</h1>");
        
        var_dump($_POST);
        
    }else{
        
        echo("Error on cast operation!");
        
    }    
    
}else{
    
    echo("No parameters are recievied");
    
    
}