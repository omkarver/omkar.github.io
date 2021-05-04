<!DOCTYPE html>
<html>
<head>
	<title>SNAK</title>
	<meta name= viewport content= "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/stylefoot.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

	<header>

		<nav>
			<div class="row clearfix">
				<a href="../homepage.php"><img src="images/studylogo.png" class="logo">
					<!--<a href="../homepage.php"><img src="images/studylogo.png"  height="100px;" width="100px;" top="20px;"></a>
					<a href="../Omkar/index.php">  <img src="images/studylogo.png" id="img" height="70px;" width="70px;"></a>-->

				<ul class="main-nav animated slideInDown" id="check-class">
					<li><a href="../homepage.php">HOME</a></li>
					<li><a href="../Question bank/qb.php">MCQs</a></li>
					<li><a href="../quiz/finalquiz.php">TAKE TEST </a></li>
					<li><a href="../login register/login.php">Sign in</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>

		<div class="main-content-header">
			<h1> ***** <span class="colorchange">STUDY TIME </span> *****.<br>
				BOOST YOUR SKILLS TEST YOURSELF HERE. </h1>
			<a href="../Comment/comment.php" class="btn btn-full">CLICK TO ASK QUESTION </a>
			<a href="#" class="btn btn-nav"> MORE</a>
		</div>
	</header>

	<script type="text/javascript">
		
		function slideshow(){
			 var x = document.getElementById('check-class');
			 if(x.style.display === "none"){
			 	x.style.display="block";
			 }else{
			 	x.style.display="none";
			 }
		}	

	</script>

	<footer class="footer">
  	 <div class="container">
  	 	<div class="row1">
  	 		<div class="footer-col">
  	 			<h4>Copyright &copy Omkar & Team</h4>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Quick links</h4>
  	 			<ul>
  	 				<li><a href="../landinpagefinal.php">Landing Page</a></li>
  	 				<li><a href="../homepage.php">Home Page</a></li>
  	 				<li><a href="../aboutus.php">About Us</a></li>
  	 				<li><a href="../quiz/finalquiz.php">Take Test</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
  	 				<a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

</body>
</html>