<?php 
// Code to convert php array to xml document 
  
// Define a function that converts array to xml. 
function arrayToXml($array, $rootElement = null, $xml = null) { 
    $_xml = $xml; 
      
    // If there is no Root Element then insert root 
    if ($_xml === null) { 
        $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>'); 
    } 
      
    // Visit all key value pair 
    foreach ($array as $k => $v) { 
          
        // If there is nested array then 
        if (is_array($v)) {  
              
            // Call function for nested array 
            arrayToXml($v, $k, $_xml->addChild($k)); 
            } 
              
        else { 
              
            // Simply add child element.  
            $_xml->addChild($k, $v); 
        } 
    } 
      
    return $_xml->asXML(); 
} 
  
// Creating an array for demo 
$my_array = array ( 
'name' => 'GFG', 
'subject' => 'CS', 
  
    // Creating nested array. 
    'contact_info' => array ( 
    'city' => 'Noida', 
    'state' => 'UP', 
    'email' => 'feedback@geeksforgeeks.org'
    ), 
); 
  
// Calling arrayToxml Function and printing the result 
echo(htmlspecialchars(arrayToXml($my_array))); 





// Code to convert php array to xml document 
  
// Creating an array 
$my_array = array ( 
    'a' => 'x', 
    'b' => 'y', 
      
    // creating nested array 
    'another_array' => array ( 
        'c' => 'z', 
    ), 
); 
  
// This function create a xml object with element root. 
$xml = new SimpleXMLElement('<root/>'); 
  
// This function resursively added element 
// of array to xml document 
array_walk_recursive($my_array, array ($xml, 'addChild')); 
  
// This function prints xml document. 
echo(htmlspecialchars($xml->asXML()));




?>