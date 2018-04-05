<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Questions</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>
<body>
	<br><br>
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
	<div class="body">
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
			$rs=mysql_query("select t.question,t.option_1, t.option_2,t.option_3,t.option_4,t.answer from questions t",$cn) or die(mysql_error());
			echo "<h1> Test </h1>";
			if(mysql_num_rows($rs)<1)
			{
				echo "<br><br><h3> You have not added any test</h3>";
				exit;
			}
			echo "<table id=table><th>Question <th>Option 1<th>Option 2<th>Option 3<th>Option 4<th>Correct Option";
			while($row=mysql_fetch_row($rs))
			{	
				echo "<tr><td>$row[0] <td> $row[1] <td> $row[2]<td> $row[3]<td> $row[4]<td> $row[5]";
			}
			echo "</table>";
		}
	?>
	</div>
</body>
</html>