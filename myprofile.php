<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>My Profile</title>
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
		<h2>My Profile</h2>
		<?php
			include("header.php");
			include("database.php");
			extract($_SESSION);
			if (!isset($_SESSION[loginid]))
			{	
				header("location:index.php");
			}
			else if (isset($_SESSION[loginid]))
			{
				$sr = mysql_query("select s.firstname, s.lastname, s.institute, s.contact, s.email from user_login s where s.loginid='$loginid'",$cn) or die(mysql_error());
				if(mysql_num_rows($sr)<1)
				{
					echo "<br><br><h1>ERROR 404: User_not found</h1>";
				}
				echo "<table id=table><th>Name <th> Institute <th> Contact <th> Email";
				while($row=mysql_fetch_row($sr))
				{
					echo "<tr><td>$row[0] $row[1] <td align=center> $row[2] <td> $row[3] <td> $row[4]";
				}
				echo "</table>";
			}
			else
				echo " Problem";
		?>
		<form name ="form1" method="post" action="Update.php" >
			<p></p>
			<input class="input" name="submit" type="submit" id="submit" value="Edit Profile">			 		
		</form>
	</div>
</body>
</html>