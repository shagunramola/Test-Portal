<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Student Dashboard</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>

<body>
	<?php
		include("header.php");
		include("database.php");
		extract($_SESSION);
		if (!isset($_SESSION[loginid]))
		{	
			header("location:index.php");
		}
	?>
	<div class="top"><a id="logo" href="index.php"><img src="logo.jpg"></a>
	<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
			<a id="link1" href="about.php"><strong>About</strong></a>
			<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
	<div class="body">
		<h2>Welcome to the Student Dashboard</h2>
		<div>
			<a class="dashboard" href="myprofile.php"><strong>My Profile</strong></a>
			<p class="dashboard"><strong>Test</strong></p>
				<a class="test" href="test.php"><strong>Take Test</strong></a><br><br>
				<a class="dashboard" href="result.php"><strong>Results</strong></a><br><br>
		</div>
	</div>
</body>
</html>
