<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Update Profile</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>
<body>
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
	<div class="body">
		<h1>Update Profile</h1>
	<?php
			include("header.php");
			include("database.php");
			extract($_POST);
			extract($_SESSION);
			if (!isset($_SESSION[loginid]))
			{	
				header("location:index.php");
			}
			else if(isset($update))
			{
				if($fname!=NULL)
					$sr = mysql_query("UPDATE user_login SET firstname='$fname' WHERE loginid='$loginid'",$cn) or die(mysql_error());
				if($lname!=NULL)
					$sr = mysql_query("UPDATE user_login SET lastname='$lname' WHERE loginid='$loginid'",$cn) or die(mysql_error());	
				if($password!=NULL)
					$sr = mysql_query("UPDATE user_login SET pass='$password' WHERE loginid='$loginid'",$cn) or die(mysql_error());
				if($con!=NULL)
					$sr = mysql_query("UPDATE user_login SET contact='$con' WHERE loginid='$loginid'",$cn) or die(mysql_error());
				if($em!=NULL)
					$sr = mysql_query("UPDATE user_login SET email='$em' WHERE loginid='$loginid'",$cn) or die(mysql_error());
				if (isset($_SESSION[loginid]))
				{
					header("location:myprofile.php");
				}
			}					
	?>
	<h3><strong>Fill the Fields you want to update</strong></h3>
	<p></p>
	<form name ="form2" method="post" action="" >
	<label>		
		Enter Name:
		<input class="input" type="text" name="fname" placeholder="First name" >
		<input class="input" type="text" name="lname" placeholder="Last name" >
		<p></p>
		Enter Password:  
		<input class="input" type="password" name="password" placeholder="Password" >
		<p></p>
		Enter Contact:
		<input class="input" type="text" name="con" placeholder="Contact" >
		<p></p>
		Enter Email:
		<input class="input" type="text" name="em" placeholder="Email" >
		<p></p>
	</label>
	<p></p>
	<td><input class="input" name="update" type="submit" id="update" value="Update">			 		
	</form>
	</div>
</body>
</html>