<?php include 'database1.php';?>
<?php
/*Get Total Questions
*/
$query ="SELECT * FROM questions";
//Get results
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title> Web Tech Quiz</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body background="ok.jpg">
	<header>
	<div class="container">
		<h1>Web Tech Quiz </h1>
	</div>
	</header>
	<main>
		<div class="container">
			<h2> Test your knowledge </h2>
			<p> This is multiple choice quiz to test your knowledge of Sports</p>
			<ul>
				<li><strong> Number of questions: </strong><?php echo $total; ?> </li>
				<li><strong>Type:</strong> Multiple choice</li>
				<li> <strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes </li>
			</ul>
		<a href="questions.php?n=1" class="start"> Start Quiz </a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, Web Tech Quiz
		</div>
	</footer>
</body>
</html>