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

$json_result = json_encode($result_array);

echo "
<form id='myForm' action='/search.php' method='post'>
<input type='hidden' name='json' value='".$json_result."'>
</form>
<script type='text/javascript'>
    document.getElementById('myForm').submit();
</script>";


$dbc->close();
	

}
?>