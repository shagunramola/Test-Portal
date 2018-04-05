<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>Select Test</title>
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
			extract($_SESSION);
			if (!isset($_SESSION[loginid]))
			{	
				header("location:index.php");
			}
			else if (isset($_SESSION[loginid]))
			{
				$rs=mysql_query("select t.test_id,t.start_date, t.end_date,t.num_ques,t.duration,t.dtype from test t",$cn) or die(mysql_error());
				echo "<h1 class=head1> Test </h1>";
				if(mysql_num_rows($rs)<1)
				{
					echo "<br><br><h1 class=head1> You have not added any test</h1>";
					exit;
				}
				$now = time() + 4.5*60*60;
				echo "<table id=table><th>Test ID <th>Start Date & Time<th>End Date & Time<th>Number of Questions<th>Duration(Mins)<th>Deadline<th>link";
				while($row=mysql_fetch_row($rs))
				{
					echo "<tr><td>$row[0]<td>$row[1]<td>$row[2]<td>$row[3]<td> $row[4]<td> $row[5]<td>";
					$chk=mysql_query("select r.login, r.test_id from result r where r.login='$loginid' AND r.test_id = $row[0]",$cn) or die(mysql_error());
					$chkr=mysql_fetch_row($chk);
					if($chkr[0]==NULL)
					{
						if($now>=strtotime($row[1]) && $now<=strtotime($row[2]))
						{
							echo "<a href='starttest.php?mid=$row[0]&tim=$now'>Click here to Start</a>";
						}
						else
						{
							echo "Click here to Start";
						}
					}
					else
					{
						echo "You have already given this Exam";
					}
				}
				echo "</table>";	
			}
		?>
	</div>
</body>
</html>