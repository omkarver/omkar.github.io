<?php 

session_start();

?>

<html>
<head>
	<title>PHP Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyle11.css">
</head>
<body>
			<div class="container">
				<a href="main.php">  <img src="studylogo.png" id="img" height="70px;" width="70px;"></a>
				<h2>Your Result</h2>
				<p>Congratulations You have completed this test succesfully.</p>
				<p>And Your <strong>Score</strong> is: <?php echo  $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>

</body>
</html>