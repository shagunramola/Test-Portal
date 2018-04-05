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
		<title>About</title>
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
			<h2>Synopsis</h2>
			<h3 class="dashboard">Problem Statement :</h3>
			<p class="test"><strong>Design and Develop Online test conducting Portal.</strong></p><br>
			<h3 class="dashboard">Tools Used :</h3>
			<ul class="test">
				<strong>
				<li>Adobe Dreamweaver</li>
				<li>Notepad++</li>
				<li>XAMPP</li>
				<li>Chrome</li>
				</strong>
				
			</ul>
			<h3 class="dashboard">Technology Used :</h3>
			<ul class="test">
				<strong>
				<li>HTML</li>
				<li>CSS</li>
				<li>PHP</li>
				<li>SQL</li>
				</strong>
				
			</ul>
			<h3 class="dashboard">Users of System :</h3>
			<ol class="test">
				<strong>
				<li>Admin</li>
				<li>Student</li>
				</strong>
				
			</ol>
			<br><br>
			<h3 class="dashboard">Admin :</h3>
			<ol class="test">
				<strong>
				<li>My Profile :</li>
					
					<ul>
					<li>Details : <em>(All the details of the admin will appear)</em></li>
					<li>Edit : <em>(Mail id, Contact No. and Password can be edited)</em></li>
					</ul><br>
				
				<li>Create Test : <em>(Students will be able to use links to take tests)</em></li>
				
					<ul>
					<li>Test Start Date</li>
					<li>Test End Date</li>
					<li>Test Duration</li>
					<li>Test Deadline Type</li>
					</ul>
				<br>
				<li>Questions : <em>(Admin will be able to add questions to the library)</em></li><br>
				<li>Students</li>
				
					<ul>
					<li>View Students:<em>(Admin will be able to view student list along with student details)</em></li>
					<li>Sign Up Students:<em>(Admin will be able to sign up students)</em></li>
					<li>Remove Students:<em>(Admin will be able to remove student accounts using their student ids)</em></li>
					</ul><br>
				
				<li>Add Admin : <em>(Admin will be able to add new Admin accounts)</em></li>
			</strong>
				</ol>
			
				<br><br>
				
				
			<h3 class="dashboard">Student :</h3>
			<ol class="test">
				<strong>
				<li>My Profile :</li>
					<ul>
					<li>Details : <em>(All the details of the student will appear)</em></li>
					<li>Edit : <em>(Mail id, Contact No., Student Group and Password can be edited)</em></li>
					</ul><br>
				<li>Take Test : <em>(Students will be able to use links to take tests)</em></li>
				<br>
				<li>Results : <em>(Students will be ale to view results of the tests taken)</em></li>
					</strong>
			</ol>
		</div>
	</body>
</html>