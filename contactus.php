<?php
	session_start();
	include("header.php");
		include("database.php");
		extract($_SESSION);
?>
<!doctype html>
<html id="html">
	<head>
<meta charset="utf-8">
<title>Contact Us</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	
</head>

<body>
	<br>
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="index.php"><strong><?php if (isset($_SESSION[loginid])){ Echo "Signout"; } else{ echo "Login"; }?></strong></a>
   		<a id="link1" href="register.php"><strong>Register</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
	<div class="body">
		<h2>Contact Details</h2>
		<h4 class="test">Shagun Ramola</h4>
		<p><strong>Roll no: </strong>2010483<br><strong>Section: </strong>C<br><strong>Email ID: </strong>shagunramola@outlook.com</p>
		<h4 class="test">Vartika Aggarwal</h4>
		<p><strong>Roll no: </strong>2010549<br><strong>Section: </strong>C<br><strong>Email ID: </strong>vartikaa68@gmail.com</p>
	</div>
</body>
</html>

