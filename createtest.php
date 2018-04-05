<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>Create Test</title>
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
		$etemp = strtotime($stestdate) + 60*$mins;
		$etestdate = date("Y-m-d\TH:i",$etemp);
		if(isset($subtest))
		{
			$sr = mysql_query("INSERT INTO test(start_date,end_date,num_ques,duration,dtype,test_pass) VALUES ('$stestdate','$etestdate','$num','$mins','$dtype','$testpassword')",$cn) or die(mysql_error());
		
		if (isset($_SESSION[loginid]))
			{
				header("location:admindashboard.php");
			}
		}
	?>
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
	<div class="body">
		<h2>Creating Test</h2><br>
		<div class="createtest">
			<form name ="form2" method="post" action="" >
				<label>
					Enter test Start date & Time: 
					<input class="input" type="datetime-local" name="stestdate" required><br><br>
					Time to complete the test : 
					<input class="input" type="number" min="10" max="1000" name="mins" required> Mins<br><br>
					Enter the Number of Questions : 
					<input class="input" type="number" min="1" max="100" name="num" required><br><br>
					Type of deadline for the test : <br>
					<div class="options">
						<input type="radio" name="dtype" value="soft" required> Soft Deadline
						<br>
						<input type="radio" name="dtype" value="hard" required> Hard Deadline
						<br><br>
					</div>
					Set Password for the Test
					<input class="input" type="password" name="testpassword" required><br><br>
					<input class="input" type="submit" name="subtest" id="subtest" Value="Create Test">
				</label>
			</form>
		</div>
	</div>
</body>
</html>
