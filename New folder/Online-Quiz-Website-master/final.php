<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title> Web Tech Quiz </title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body background="ok.jpg">
	<header>
	<div class="container">
		<h1> Web Tech Quiz </h1>
	</div>
	</header>
	<main>
		<div class="container">
			<h2> You're Done</h2>
				<p>Congrats !! You have completed the quiz </p>
				<p>Final Score : <?php echo $_SESSION['score']?> </p>
				<a href="questions.php?n=1" class="start"> Take again </a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, Web Tech Quiz
		</div>
	</footer>
</body>
</html>
<?php session_destroy();?>