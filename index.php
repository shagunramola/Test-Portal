<?php
	session_start();
?>
<!doctype html>
<html id="html">
	<head>
	<meta charset="utf-8">
	<title>Mini Project Test Portal</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	
</head>

<body>
	<?php
	include("header.php");
	include("database.php");
	extract($_POST);

	if(isset($submit))
	{
		$sr=mysql_query("select * from user_login where utype='$itype' and loginid='$username' and pass='$password'");
		if(mysql_num_rows($sr)<1)
		{
			$found="N";
		}
		else
		{
			$_SESSION[loginid]=$username;
		}
	}
	if (isset($_SESSION[loginid]))
	{
		if($itype=="Student")
		{	
			header("location:studentdashboard.php");		
		}
		elseif($itype=="Teacher")
		{
			header("location:admindashboard.php");
		}
		else
		{
			header("location:signout.php");
		}
		exit;
		}
	?>
	
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="index.php"><strong><?php if (isset($_SESSION[loginid])){ Echo "Signout"; } else{ echo "Login"; }?></strong></a>
   		<a id="link1" href="register.php"><strong>Register</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
		
	</div>
	<div class="body">

		<form name ="form1" method="post" action="" >

			<h2><strong>Hello! <br>Welcome to the Mini Project Test Portal.</strong></h2>

			<label>
				
				<h3>Login</h3>

				<div class="info">
					Select User Type:

					<div class="options">
						<input type="radio" name="itype"  value="Teacher" required> Teacher
						<br>
						<input type="radio" name="itype" value="Student" required> Student
						<br>
					</div>

					Enter Username:
					<input class="input" type="text" name="username" placeholder="EmployeeID/StudentID" required>
					<p></p>
					Enter Password:  
					<input Class="input" type="password" name="password" placeholder="Password" required>
			<?php
		  	if(isset($found))
		  	{
		  		header("location:loginerror.html");
		 	}
		  	?>
          		</div>
			</label>
			<p></p>
			<input class="input" name="submit" type="submit" id="submit" value="Submit">			 		
		</form>
	</div>
</body>
</html>
