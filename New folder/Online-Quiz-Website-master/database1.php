<?php
//Create connection credentials
$db_host = 'localhost';
$db_name = 'quizzer';
$db_user = 'root';
$db_pass = '';


//create mysqli object
$mysqli = new mysqli("localhost","root","");
mysqli_select_db($mysqli,"quizzer");
//Error handler
if($mysqli->connect_error){
	printf("Connect Failed: %s\n", $mysqli->connect_error);
	exit();
}
?>