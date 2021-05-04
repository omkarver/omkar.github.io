<!DOCTYPE html>
<html>
<head>
	<title>Question bank</title>
	<link rel="stylesheet" type="text/css" href="questionbankstyle.css">
	<style>
body {
    background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('study4.jpg');
    
    background-repeat: no-repeat;
    background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	height: 100vh;
    /*background: #bf55ec;*/
}
	</style>
</head>
<body>
	<div class="drop">
		<a href="../Omkar/index.php">  <img src="studylogo.png" id="img" height="70px;" width="70px;"></a>
		<div style="margin:1em">
				<button name="om">Following are the question with 4 option</button>
		<!--	<div id="om">
				<ul>
				<li>Uttar Pradesh</li>
				<li>Bihar</li>
				<li>Uttarakhand</li>
				<li>West Bengal</li>
			</ul>
			</div>-->
		</div>

		<div style="margin:1em">
				<button name="q1">Q1. Which state will set up an International level Ramayana Museum and Cultural Center?</button>
			<div id="q1">
				<ul>
				<li>Uttar Pradesh</li>
				<li>Bihar</li>
				<li>Uttarakhand</li>
				<li>West Bengal</li>
			</ul>
			</div>
		</div>

		<div style="margin:1em">
				<button name="q2">Q2. Which state announced to set up the Vikram Sarabhai Children Innovation Centre?</button>
			<div id="q2">
				<ul>
				<li>Karnataka</li>
				<li>Gujarat</li> <!-- right answer-->
				<li>Andhra Pradesh</li>
				<li>Kerala</li>
			</ul>
			</div>
		</div>

		<div style="margin:1em">
				<button name="q3">Q3. Which Indian state recently signed an MoU with Government e-Marketplace (GeM) to set up a GeM Organizational Transformation Team (GOTT) unit?</button>
			<div id="q3">
				<ul>
				<li>[A] Gujarat</li>
				<li>[B] Uttar Pradesh</li> <!-- right answer-->
				<li>[C] Uttarakhand</li>
				<li>[D] Karnataka</li>
			</ul>
			</div>
		</div>

		<div style="margin:1em">
				<button name="q4">Q4. Which state has recently reduced the retirement age of government employees to 58 years?</button>
			<div id="q4">
				<ul>
				<li>[A] Odisha</li>
				<li>[B] Rajasthan</li> 
				<li>[C] Punjab</li>  <!-- right answer-->
				<li>[D] Andhra Pradesh</li>
			</ul>
			</div>
		</div>
		
		<div style="margin:1em">
				<button name="q5">Q5. Which state has recently reduced the retirement age of government employees to 58 years?</button>
			<div id="q5">
				<ul>
				<li>[A] Bihar</li>
				<li>[B] Uttar Pradesh</li>  <!-- right answer-->
				<li>[C] Odisha</li>  
				<li>[D] New Delhi</li>
			</ul>
			</div>
		</div>
		<div style="margin:1em">
				<h2 style="color: #d7385e;">You can Donload pdf conatining answer of above questons for cross verification of your answers</h2>
				<p><b>Click below download pdf</b></p> 
				<a href="download.php?file=omkar" target="_omkar">DOWNLOAD PDF NOW</a>
			
			
		</div>

	</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script type="text/javascript">
		// $(document).ready(function(){
		// 	$('button').click(function(e){
		// 		console.log(e)
		// 		$('#q1').toggle(100);
		// 	})
		// })

		document.querySelector('div').addEventListener('click', function(e){
		const name = e.target.name;
		document.querySelector(`#${name}`).style.display = document.querySelector(`#${name}`).style.display === 'none'? "block" : 'none';

		})
		
	</script>

</body>
</html>