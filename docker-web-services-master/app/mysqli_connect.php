<?php
DEFINE ('DB_USER', 'webmaster');
DEFINE ('DB_PASSWORD', 'webmaster');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'test1');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Coud not connect to mysql'.mysqli_connect_error());

?>
