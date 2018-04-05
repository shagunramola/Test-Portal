<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Result</title>
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
	<p class="test"><strong class="dashboard">Note : </strong> Passing percentage for a test is 33%.<p>
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
			$rs=mysql_query("select t.login,t.test_id, t.test_date,t.score from result t where t.login ='$loginid'",$cn) or die(mysql_error());
			echo "<h1> Result </h1>";
			if(mysql_num_rows($rs)<1)
			{
				echo "<br><br><h3> You have not given any test</h3>";
				exit;
			}
			echo "<table id=table><th>Username <th>Test ID<th>Test Date<th>Percentage";
			while($row=mysql_fetch_row($rs))
			{
				echo "<tr><td>$row[0] <td> $row[1] <td> $row[2]<td> $row[3] %";
			}
			echo "</table>";
		}
	?>
	</div>
</body>
</html>