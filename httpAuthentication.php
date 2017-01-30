<!DOCTYPE html>
<html>
<head>
	<title>HTTP Authentication test</title>
</head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$login = 'admin'; 
$pass = 'admin'; 
if(($_SERVER['PHP_AUTH_PW']!= $pass || $_SERVER['PHP_AUTH_USER'] != $login)|| !$_SERVER['PHP_AUTH_USER']) 
{ 
    header('WWW-Authenticate: Basic realm="Test auth"'); 
    header('HTTP/1.0 401 Unauthorized'); 
    echo 'Oops..! You hit the cancel button'; 
    exit; 
} else {
	echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
}
?>
</body>
</html>