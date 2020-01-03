<?php
if(isset($_POST['submit'])){
	
	switch($_POST['request']){
		
		case "Get XML registers":
			echo "
				<form id='myForm' action='get_xml.php' method='post'>
				<input type='hidden' name='json' value='getXML'>
				</form>
				<script type='text/javascript'>
				    document.getElementById('myForm').submit();
				</script>";
			break;
			
		case "Insert XML register":
			echo "
				<form id='myForm' action='register_xml.php' method='post'>
				<input type='hidden' name='json' value='getXML'>
				</form>
				<script type='text/javascript'>
				    document.getElementById('myForm').submit();
				</script>";
			break;
			
		default:
			http_response_code(400);
		
	}
		
	
}

?>