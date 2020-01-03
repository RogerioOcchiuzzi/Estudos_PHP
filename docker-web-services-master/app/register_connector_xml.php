<?php
if(isset($_POST["firstname"]) and  isset($_POST["lastname"]) and isset($_POST["phone"]) ){
        
    $student = array($_POST["firstname"],$_POST["lastname"],$_POST["phone"]);
    
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
	array_to_xml($student,$xml_data);
	
	echo "
	<form id='myForm' action='/db_insert.php' method='post'>
	<input type='hidden' name='xml' value='".$xml_data->asXML()."'>
	</form>
	<script type='text/javascript'>
	    document.getElementById('myForm').submit();
	</script>";
	
	}
?>