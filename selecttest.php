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
		extract($_POST);
		if (!isset($_SESSION[loginid]))
		{	
			header("location:index.php");
		}
		$mid = $_GET['mid'];
		if(isset($subques))
		{
			$chkdques = $_POST['chkques'];
			if(empty($chkdques))
			{
				echo("<h2>No question Selected</h2>");
			}
			else
			{
				$N = count($chkdques);
				echo("<h2>You selected $N Questions: </h2> <strong>Question Number:</strong>");
				for($i=0; $i < $N; $i++)
				{
					echo ($chkdques[$i]." ");
				}
				$rs=mysql_query("select t.test_id,t.start_date, t.end_date,t.num_ques,t.duration,t.dtype from test t where t.test_id = '$mid' ",$cn) or die(mysql_error());
				$row3=mysql_fetch_row($rs);
				$edd = mysql_query("select ques_id from test_$row3[0]",$cn);
				$numr=mysql_num_rows($edd);
				$dif = $row3[3]-$numr;
				echo ("<br><br><strong>Need to add $dif more questions to compelete creating the test</strong>");
							echo "<br><a class=test href='selecttest.php?mid=$row3[3]'><h3>Select More Questions</h3></a> or <a class=test href='admindashboard.php'><h3>Back to Dashboard</h3></a>";
			}
			$rs=mysql_query("CREATE TABLE IF NOT EXISTS test_$mid (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, test_id INT NOT NULL, ques_id INT NOT NULL UNIQUE)",$cn) or die(mysql_error());
			$N = count($chkdques);
			for($i=0; $i < $N; $i++)
			{
				$sql = mysql_query("INSERT INTO test_$mid(test_id , ques_id) values('$mid','$chkdques[$i]')",$cn);
			}
			exit;
		}
		extract($_SESSION);
		if (isset($_SESSION[loginid]))
		{
			$rs=mysql_query("select t.tid,t.question from questions t",$cn) or die(mysql_error());
			$sr=mysql_num_rows($rs);
			echo "<h1> Select Questions </h1>";
		}
	?>
	<form name="form3" action="" method="post">
		<table id="table">
		<?php 
			while($row=mysql_fetch_row($rs))
			{
				echo "<tr><td>$row[0] <td> $row[1] <td>";
			?>
		<input type="checkbox" name="chkques[]" value=<?php echo "$row[0]"?>>
		<?php 
			} 
		?>
		</table>
		<br><br>
		<input class="input" type="submit" name="subques" id="subques" value="Add to the Test" required>
	
	</form>
</div>
</body>
</html>