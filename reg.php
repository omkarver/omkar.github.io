<?php
session_start();
?>


<!DOCTYPE html>
<html >
<head>
  
  <title>Login/Signup Form</title>
  <link rel="stylesheet" href="css/log-sign.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$Username = mysqli_real_escape_string($con, $_POST['Username']);
	$Email = mysqli_real_escape_string($con, $_POST['Email']);
	$Password = mysqli_real_escape_string($con, $_POST['Password']);
	$Cpassword = mysqli_real_escape_string($con, $_POST['Cpassword']);

	$emailquery = "select * from registration where Email='$Email'";
	$query = mysqli_query($con, $emailquery);

	$emailcount = mysqli_num_rows($query);

	if ($emailcount>0) {
		echo "Email already exist";
	}
	else{

		if ($Password === $Cpassword) {

			$insertquery = "insert into registration(Username, Email, Password, Cpassword) values('$Username','$Email','$Password','$Cpassword')";

			$iquery = mysqli_query($con, $insertquery);


	if ($iquery) {
		?>
		<script>
			alert("inserted successful");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("no insert");
		</script>
		<?php
	}	
	}else{
		?>
		<script>
			alert("password are not matching");
		</script>
		<?php
			/*echo "password are not matching";*/
		}

	}


}
?>


<?php

include 'dbcon.php';
if(isset($_POST['button'])){
	$EmailL = $_POST['EmailL'];
	$PasswordL = $_POST['PasswordL'];

	$email_searchL = " select * from registration where Email='$EmailL'";
	$queryL = mysqli_query($con, $email_searchL);

	$emailcountL = mysqli_num_rows($queryL);

	if($emailcountL){
		$email_passL = mysqli_fetch_assoc($queryL);

		$db_pass = $email_passL['Password'];

		$pass_correct = password_verify($PasswordL, $db_pass);

		if($pass_correct){
			echo "login successful";
		}else{
			echo "password incorrect";
		}
	}else{
		echo "invalid email";
	}
}

?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
  <div class="form">
    <div class="head" class="signup">
      <div onclick="swap(this);" data-tab="login" class="login-tab" >
        LOGIN
      </div>
      <div onclick="swap(this);" data-tab="signup" class="signup-tab">
        SIGNUP
      </div>
    </div>
    <div class="body" id="form-body">
        <div class="login">
          <div class="form-row">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="Email" name="EmailL">
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="PasswordL">
            <button type="button" name="button">Login</button>
          </div>
          <div class="span">
            <span>OR</span>
          </div>
          <div class="footer">
            LogIn With
            <div class="social google">
              <i class="fa fa-google" aria-hidden="true"></i>
            </div>
            <div class="social facebook">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="signup">
          <div class="form-row">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="Username" required>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" placeholder="Email" name="Email" required>
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="Password" placeholder="Password" name="Password" required>
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="Password" placeholder="Re-Type Password" name="Cpassword" required>
            <button type="submit" name="submit">Submit</button>
          </div>
        </div>
    </div>
  </div>
  </form>
 <script>
   function swap(referTo){
    if(referTo.getAttribute("data-tab") == "login") {
      document.getElementById("form-body").classList.remove('active');
      referTo.parentNode.classList.remove('signup');
    }
    else{
      document.getElementById("form-body").classList.add('active');
      referTo.parentNode.classList.add('signup');
    }
   }
 </script>
</body>
</html>