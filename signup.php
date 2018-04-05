<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>Sign Up</title>
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
		else if(isset($addstud))
		{	$rs=mysql_query("select * from user_login where loginid='$susername'");
			if (mysql_num_rows($rs)>0)
				{
					echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
					exit;
				}
			$sr = mysql_query("INSERT INTO user_login(loginid,pass,utype,firstname,lastname,institute) VALUES ('$susername','$spassword','student','$sfname','$slname','$sinsti')",$cn) or die(mysql_error());
		
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
		<h2>Sign up Student</h2>
		<form name ="form2" method="post" action="" >
			<label>
				Enter Name of Student:
				<input class="input" type="text" name="sfname" placeholder="Enter First Name" required>
				<input class="input" type="text" name="slname" placeholder="Enter Last Name" required><br><br>
				Enter Institute:
				<input class="input" type="text" name="sinsti" placeholder="Enter Institute" required><br><br>
				Enter Student Username:
				<input class="input" type="text" name="susername" placeholder="Username" required><br><br> 
				Enter Student Password:
				<input class="input" type="password" name="spassword" placeholder="Password" required><br><br>
				<input class="input" type="submit" name="addstud" id="addstud" value="Add Student" required>
			</label>
		</form>
	</div>
</body>
</html>
