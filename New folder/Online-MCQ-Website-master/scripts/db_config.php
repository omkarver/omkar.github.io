<?php

$db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "root";
// Place the password for the MySQL database here
$db_password = "";
// Place the name for the MySQL database here
$db_name = "mcqportal";

// Run the connection here 
$con = mysqli_connect("$db_host", "$db_username", "$db_password", "$db_name");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}
?>