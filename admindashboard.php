<?php
	session_start();
	
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>

<body>
	<?php
		include("header.php");
		include("database.php");
		extract($_POST);
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
		<h2>Welcome to the Admin Dashboard</h2>
		<div>
			<a class="dashboard" href="myprofile.php"><strong>My Profile</strong></a>
			<p class="dashboard"><strong>Test</strong></p>
				<a class="test" href="createtest.php"><strong>Create Test</strong></a><br><br>
				<a class="test" href="viewtest.php"><strong>View Test</strong></a>
   			<p class="dashboard"><strong>Questions</strong></p>
				<a class="test" href="questions.php"><strong>Add Questions</strong></a><br><br>
				<a class="test" href="questionslibrary.php"><strong>Questions Library</strong></a><br><br>
			<p class="dashboard" ><strong>Students</strong></p>
				<a class="test" href="signup.php"><strong>Sign up Student</strong></a><br><br>
				<a class="test" href="view.php"><strong>View Student List</strong></a><br><br>
				<a class="test" href="remove.php"><strong>Remove Student</strong></a><br><br>
			<a class="dashboard" href="addadmin.php"><strong>Add Admin</strong></a><br><br>
		</div>
	</div>
</body>
</html>
