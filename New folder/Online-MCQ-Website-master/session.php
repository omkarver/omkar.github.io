<?php
    include('scripts/db_config.php');
	session_start();
	$check=$_SESSION['login_username'];
	$session=mysqli_query($con,"SELECT username FROM admins WHERE username='$check' ")or die(mysqli_error());
	$row=mysqli_fetch_array($session);
	$login_session=$row['username'];
	if(!isset($login_session)) {
		$user_msg = 'Please Login First!';
		header('location: login.php?user_msg='.$user_msg.'');
	}

?>