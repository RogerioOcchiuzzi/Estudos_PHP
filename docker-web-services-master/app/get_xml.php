<?php
   require_once("mysqli_connect.php");

if(mysqli_connect_errno()){
    
    printf("Connect failure: %s \n", mysqli_connect_error());
    exit();
    
}else{
    
    $query = "SELECT * FROM students_register";
    
    $result = $dbc->query($query);
	
	$result_array = array();
	
	$index = 0;
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $result_array[$index] = $row;
			$index++;
	    }
	}
	
	//var_dump($result_array);
	
	// function definition to convert array to xml
	function array_to_xml( $data, &$xml_data ) {
	    foreach( $data as $key => $value ) {
	        if( is_numeric($key) ){
	            $key = 'item'.$key; //dealing with <0/>..<n/> issues
	        }
	        if( is_array($value) ) {
	            $subnode = $xml_data->addChild($key);
	            array_to_xml($value, $subnode);
	        } else {
	            $xml_data->addChild("$key",htmlspecialchars("$value"));
	        }
	     }
	}
	
	// creating object of SimpleXMLElement
	$xml_data = new SimpleXMLElement('<?xml version="1.0"?><students></students>');
	
	// function call to convert array to xml
	array_to_xml($result_array,$xml_data);
	print ($xml_data->asXML());
	
	$dbc->close();
		
}
?>
<form  action="http://localhost">
    <h1>Busca feita com sucesso!</h1>
    <input type="submit" value="Voltar">
<form/>