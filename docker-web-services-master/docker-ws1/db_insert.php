<?php

require_once("mysqli_connect.php");

if(mysqli_connect_errno()){
    
    printf("Connect failure: %s \n", mysqli_connect_error());
    exit();
    
}else{

    $student_data = json_decode($_POST['json']);
    
    $query = "INSERT INTO students_register (first_name, last_name, phone) 
        VALUES ('$student_data[0]', '$student_data[1]', '$student_data[2]')";
    
    $dbc->query($query);
}
?>
<form  action="http://localhost">
    <h1>Inserção feita com sucesso!</h1>
    <input type="submit" value="Voltar">
<form/>