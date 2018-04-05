<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>Questions</title>
<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>

<body>
	<?php
		include("header.php");
		include("database.php");
		extract($_POST);
		extract($_SESSION);
		if (!isset($_SESSION[loginid]))
		{	
			header("location:index.php");
		}
		else if(isset($addques))
		{
			$sr = mysql_query("INSERT INTO questions(question,option_1,option_2,option_3,option_4,answer) VALUES ('$question','$option1','$option2','$option3','$option4','$correct')",$cn) or die(mysql_error());
			if(isset($_SESSION[loginid]))
			{
			if($madd=="no")
			{
				header("location:admindashboard.php");
			}
			}
			
		}
	?>
	<div class="top">
		<a id="logo" href="index.html"><img src="logo.jpg"></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
<div class="body">
		<h2>Add Question</h2>
		<form name ="form2" method="post" action="" >
			<label>
				Enter Question : 
				<textarea name="question" class="input" placeholder="Enter question here" rows="1" cols="60" required></textarea><br><br>
				Enter Option 1 :
				<input class="input" type="text" name="option1" placeholder="Option 1" required><br><br>
				Enter Option 2 :
				<input class="input" type="text" name="option2" placeholder="Option 2" required><br><br>
				Enter Option 3 :
				<input class="input" type="text" name="option3" placeholder="Option 3" required><br><br>
				Enter Option 4 :
				<input class="input" type="text" name="option4" placeholder="Option 4" required><br><br>
				Enter Correct Option :
				<input class="input" type="text" name="correct" placeholder="Answer" required><br><br>
				Do you want to add more Question ? <br>
				<div class="options">
						<input type="radio" name="madd" value="yes" required>YES
						<br>
						<input type="radio" name="madd" value="no" required>NO
						<br><br>
					</div>
				<input class="input" type="submit" name="addques" id="addques" Value="Add Question">
			</label>
		</form>
	</div>
</body>
</html>
