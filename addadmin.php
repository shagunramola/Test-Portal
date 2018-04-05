<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Add Admin</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">	
</head>
<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
<body>
	<div class="body">
		<?php
			include("header.php");
			include("database.php");
			extract($_POST);
			extract($_SESSION);
			if (!isset($_SESSION[loginid]))
			{	
				header("location:index.php");
			}
			else if(isset($addadmin))
			{	$rs=mysql_query("select * from user_login where loginid='$adminusername'");
				if (mysql_num_rows($rs)>0)
					{
						echo "<br><br><br><div>Login Id Already Exists</div>";
						exit;
					}
				$sr = mysql_query("INSERT INTO user_login(loginid,pass,utype,firstname,lastname,institute,email,contact) VALUES ('$adminusername','$adminpassword','Teacher','$fadminname','$ladminname','$admininsti','$admincon','$adminemail')",$cn) or die(mysql_error());
			
			if (isset($_SESSION[loginid]))
				{
					header("location:admindashboard.php");
				}
			
			}
		?>
		<h2>Add Admin Credentials</h2>
		<form name ="form2" method="post" action="" >
			<label>
				Enter Name of Admin:
				<input class="input" type="text" name="fadminname" placeholder="First Name" required>
				<input class="input" type="text" name="ladminname" placeholder="Last Name" required><br><br>
				Enter e-mail id of Admin:
				<input class="input" type="email" name="adminemail" placeholder="admin@abc.com" required><br><br>
				Enter Contact of Admin:
				<input class="input" type="tel" name="admincon" placeholder="Enter contact number" required><br><br>
				Enter Admin Institute:
				<input class="input" type="text" name="admininsti" placeholder="Username" required><br><br>
				Enter Admin Username:
				<input class="input" type="text" name="adminusername" placeholder="Username" required><br><br> 
				Enter Admin Password:
				<input class="input" type="password" name="adminpassword" placeholder="Password" required><br><br>
				<input class="input" type="submit" name="addadmin" id="addadmin" value="Add Admin" required>
			</label>
		</form>
	</div>
</body>
</html>
