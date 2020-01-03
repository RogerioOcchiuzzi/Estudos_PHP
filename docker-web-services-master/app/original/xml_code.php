<?php
    
//header('Content-Type: text/xml');
    
require_once('StudentDB.php');
/*
$dale_cooper = array("Dale", "Cooper", "342325525345");

$xml = new SimpleXMLElement("<student />");

foreach ($dale_cooper as $info) {
	
	$xml->addChild("data", $info);
	
}

$dom = dom_import_simplexml($xml)->ownerDocument;

$dom->formatOutput = true;

echo $dom->saveXML();
*/
require_once("mysqli_connect.php");

if(mysqli_connect_errno()){
	
	printf("Connect Failure %s", mysqli_connect_err);
	exit();
	
}

$query = "SELECT * FROM students_register WHERE student_id = 17";

$student_array = array();

if($result = $dbc->query($query)){
	
	while($obj = $result->fetch_object()){
		
		//printf("%s %s %s %s <br />", $obj->first_name,
		//$obj->last_name, $obj->phone, $obj->student_id);
		
		$temp_student = new StudentDB($obj->first_name,
		$obj->last_name, $obj->phone, $obj->student_id);
		
		$student_array[] = $temp_student;
		
	}
	
	echo('<!?xml version="1.0" encoding="UTF-8" ?>');
	
	echo("<students>");
	
	foreach($student_array[0] as $key=>$value){
		
		echo('<'.$key.'>'.$value.'</'.$key.'>');

	}
	echo("</students>");
	
}


    
?>
















