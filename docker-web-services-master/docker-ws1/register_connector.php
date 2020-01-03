<?php

if(isset($_POST["firstname"]) and  isset($_POST["lastname"]) and isset($_POST["phone"]) ){
        
    $student = array($_POST["firstname"],$_POST["lastname"],$_POST["phone"]);
    
    $student_json = json_encode($student); 
        
echo "
<form id='myForm' action='/db_insert.php' method='post'>
<input type='hidden' name='json' value='".$student_json."'>
</form>
<script type='text/javascript'>
    document.getElementById('myForm').submit();
</script>";
}
?>