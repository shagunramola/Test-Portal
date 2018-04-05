<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">	
	<title>Students</title>
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
		else if (isset($_SESSION[loginid]))
		{
			$rs=mysql_query("select t.loginid,t.firstname, t.lastname,t.institute,t.email,t.contact from user_login t where utype='student'",$cn) or die(mysql_error());
			echo "<h1> Students List </h1>";
			if(mysql_num_rows($rs)<1)
			{
				echo "<br><br><h3> There are no students</h3>";
				exit;
			}
			echo "<table id=table><th>Username <th>Name<th> Institute <th>Email<th>Contact";
			while($row=mysql_fetch_row($rs))
			{
				echo "<tr><td>$row[0] <td> $row[1] $row[2] <td>$row[3]<td> $row[4]<td> $row[5]";
			}
			echo "</table>";
		}
	?>
	</div>
</body>
</html>
