<?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/mainstyle11.css">
</head>
<body>
		<div class="container">
			<a href="finalquiz.php">  <img src="studylogo.png" id="img" height="70px;" width="70px;"></a>
			  <img src="studylogo.png"  height="70px;" width="70px;"></a>
			<div class="box">
				<h2>Test Your Knowledge</h2>
				<p>
					This is a multiple choice quiz to test your Knowledge.<br>
				</p>
				<ul>
					<br>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> Multiple Choise</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>
					<br>

				</ul>
				<div class="start">
					<a href="question.php?n=1" class="start">Start Quize</a>
				</div>
				

			</div>
		</div>
</body>
</html>