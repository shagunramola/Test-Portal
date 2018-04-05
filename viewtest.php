<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
<meta charset="utf-8">
<title>Test</title>
<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>

<body>
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
	</div>
	<div class="body">
	<?php
		include("header.php");
		include("database.php");
		extract($_SESSION);
		$now = time() + (4.5 * 60 *60);
		$rs1=mysql_query("select t.test_id,t.start_date, t.end_date,t.num_ques,t.duration,t.dtype from test t",$cn) or die(mysql_error());
		while($row1 = mysql_fetch_row($rs1))
		{
			$chk = strtotime($row1[2]);
			if($now > $chk)
			{
				mysql_query("Drop TABLE test_$row1[0] ",$cn) or die(mysql_error());
			}
			mysql_query("Delete from test where $now>$chk",$cn) or die(mysql_error());
			
		}
		if (isset($_SESSION[loginid]))
		{	
			$rs=mysql_query("select t.test_id,t.start_date, t.end_date,t.num_ques,t.duration,t.dtype from test t",$cn) or die(mysql_error());
			echo "<h1> Test </h1>";
			if(mysql_num_rows($rs)<1)
			{
				echo "<br><br><h1> You have not added any test</h1>";
				exit;
			}
			echo "<table id=table><tr><td>Test ID <td>Start Date<td>End Date<td>Number of Question<td>Duration<td>Deadline<td>link<td>";
			while($row=mysql_fetch_row($rs))
			{
				echo "<tr><td>$row[0] <td> $row[1] <td> $row[2]<td> $row[3]<td> $row[4]<td> $row[5]";
				$edd = mysql_query("select ques_id from test_$row[0]",$cn);
					$numr=mysql_num_rows($edd);
					if($numr==0)
						{
							echo "<a href='selecttest.php?mid=$row[0]'>Click to Edit</a>";
						}
					else if($numr>0 && $numr<$row[3])
						{	
							$dif = $row[3]-$numr;
							echo "<a href='selecttest.php?mid=$row[0]'>Need $dif more questions to be added</a>";
						}
					else
						{
							echo "Question had been added";
						}
			}
			echo "</table>";
		}
	?>
	</div>
</body>
</html>