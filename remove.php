<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>Remove Student</title>
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
	<?php
		include("header.php");
		include("database.php");
		extract($_POST);
		extract($_SESSION);
		if (!isset($_SESSION[loginid]))
		{	
			header("location:index.php");
		}
		else if(isset($remstud))
		{	$rdr = mysql_query("select * from user_login where loginid='$susername1' AND utype='student'",$cn)or die(mysql_error());
			if (mysql_num_rows($rdr)>0)
				{
					$rsr = mysql_query("DELETE from user_login where loginid='$susername1'",$cn) or die(mysql_error());
				}
			else
			{
			
			echo "<br><br><br><div class=head1>Error. Invalid Login ID.</div>";
					exit;
			}
		
		}
	?>
	
	<div class="body">
		<h2>Remove Student</h2>
		<form name ="form2" method="post" action="" >
			<label>
				Enter Name of Student:
				<input class="input" type="text" name="sname1" placeholder="Enter Name" required><br><br>
				Enter Student Username : 
				<input class="input" type="text" name="susername1" placeholder="Enter student username"><br><br>
				<input class="input" type="submit" name="remstud" id="remstud" value="Remove Student" required>
			</label>
		</form>
	</div>
</body>
</html>
