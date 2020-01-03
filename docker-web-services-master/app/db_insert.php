<?php

require_once("mysqli_connect.php");

if(mysqli_connect_errno()){
    
    printf("Connect failure: %s \n", mysqli_connect_error());
    exit();
    
}else{

    //echo $_POST['xml'];
	
	//convert xml string into an object
	$xml = simplexml_load_string($_POST['xml']);
	
	//convert into json
	$json  = json_encode($xml);
	
	//convert into associative array
	$xmlArr = json_decode($json, true);

    $query = "INSERT INTO students_register (first_name, last_name, phone) 
        VALUES ('".$xmlArr["item0"]."', '".$xmlArr["item1"]."', '".$xmlArr["item2"]."')";
    
    $dbc->query($query);
}
?>
<form  action="http://localhost">
    <h1>Inserção feita com sucesso!</h1>
    <input type="submit" value="Voltar">
<form/>