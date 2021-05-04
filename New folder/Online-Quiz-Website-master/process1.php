<?php include 'database1.php' ;
 session_start(); 

	//Check oto see if score is set_error_handler
	if(!isset($_SESSION['score'])){
	$_SESSION['score']=0;
	}
	
	if($_POST){
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		
		//Get total question
		$query="SELECT * FROM questions";
		//Get Result
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		$total = $result->num_rows;
		
		//Get correct choice
		
		$query = "SELECT * FROM choices
				WHERE question_number = $number AND is_correct = 1";
				
		//Get Result
		$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Get row
		$row = $result->fetch_assoc();
		
		//Set correct choice
		$correct_choice = $row['id'];
		echo $correct_choice;
		echo $selected_choice;
		//compare
		if($correct_choice == $selected_choice){
		//answer is correct
		$_SESSION['score']++;
		}
		 
		 
		 
		//check if last question_number
		if($number == $total){
					header("Location: final.php");
				
		} else{
			header("Location: questions.php?n=".$next);
		}
	}
		
		
		
		
		
		