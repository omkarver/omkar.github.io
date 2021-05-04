<?php include 'database1.php' ;?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];
	
	//Get total question
		$query = "SELECT * FROM questions";
	//Get Result
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $result->num_rows;
		
	
	
	/*
	* Get Question
	*/
	$query = "SELECT * FROM questions
				WHERE question_number = $number";
				
	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();
	
	//Get choices
	$query = "SELECT * FROM choices
				WHERE question_number = $number";
				
	//Get Result
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
	 
?>
<!DOCTYPE html>
<html>
<style>
	
</style>
<head>
	<meta charset="utf-8" />
	<title> Web Tech Quiz</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body background="html.png">
	<header>
	<div class="container">
		<h1> Web Tech Quiz </h1>
	</div>
	</header>
	<main>
		<div class="container">
		<div class="current">Question <?php echo $question['question_number'] ;?> of <?php echo $total;?></div>
		<p class="questions">
		<?php echo $question['text'];?>
		</p>
		<form method="post" action="process1.php">
			<ul class="choices">
				<?php 
				while($row = $choices->fetch_assoc()):?>
					<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php echo $row['text'] ?></li>
				<?php endwhile; ?>
			</ul>
			<input type="submit" value="Submit"/>
			<input type="hidden" name="number" value="<?php echo $number; ?>"/>
		</form>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2017, Web Tech Quiz
		</div>
	</footer>
</body>
</html>
