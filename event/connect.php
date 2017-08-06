<?php 

//connecting to a database 
$host ="localhost"; 
$username = 'root'; 
$password = ''; 
$database = 'event'; 

$mysqli = new mysqli($host, $username, $password, $database); 
if (mysqli_connect_errno()){ 
printf("connection failed: %s \n ", mysqli_connect_error()); 
} 

$mysqli->set_charset("utf8"); 




?>