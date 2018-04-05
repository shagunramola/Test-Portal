<?php
	session_start();
	error_reporting(1);
	include("database.php");
	include("header.php");
	extract($_POST);
	extract($_GET);
	extract($_SESSION);
	
	$mid=$_GET['mid'];	
	$tim=$_GET['tim'];
	$chk = mysql_query("select r.login, r.test_id from result r where r.login='$loginid' AND r.test_id = '$mid'",$cn) or die(mysql_error());
	$chkr = mysql_fetch_row($chk);
	if($chkr[0]=="NULL")
	{
		mysql_query("insert into result(login,test_id) values('$loginid','$mid' ") or die(mysql_error());
	}
/*$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
/*if(isset($midi))
{
$_SESSION[midi]=$mid;
header("location:starttest.php");
}
if(!isset($_SESSION[midi]))
{
	header("location: index.php");
}
*/
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
		<a id="logo" href="index.php"><img src="logo.PNG"></a>
		<a id="link1" href="index.php"><strong>Login</strong></a>
   		<a id="link1" href="register.php"><strong>Register</strong></a>
		<a id="link1" href="about.html"><strong>About</strong></a>
		<a id="link1" href="contactus.html"><strong>Contact Us</strong></a>
		<a id="link1" href="signout.php"><strong>Sign Out</strong></a>
	</div>

<body>
	<p id="demo"></p>
	<?php
		$rse = mysql_query("select t.test_id,t.start_date, t.end_date, t.num_ques, t.duration, t.dtype from test t where t.test_id=$mid", $cn) or die(mysql_error());
		$rowt = mysql_fetch_row($rse);
		$now = time() + (4.5*60*60);
		if($now>=strtotime($rowt[1]) && $now<=strtotime($rowt[2]))
		{
		if($rowt[5]=="soft")
		{
		$et2= $tim + ($rowt[4]*60);
		$et1 = date("Y-m-d H:i:s",$et2);
		}
		else
		{
			$et1=$rowt[2];		
			}
		}
		?>
		
		<script>
		var countDownDate = <?php echo strtotime($et1); ?>;
		document.getElementById("demo").style.fontSize = "50px";
		document.getElementById("demo").style.textAlign = "center";
		// Update the count down every 1 second
		var x = setInterval(function() {
			
			var now = new Date().getTime();

		  // Find the distance between now an the count down date
		  var distance = countDownDate -((now+(4.5*60*60*1000))/1000);

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (60 * 60 * 24));
  var hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60));
  var minutes = Math.floor((distance % (60 * 60)) /60);
  var seconds = Math.floor((distance % (60)));

  // Display the result in the element with id="demo"
  
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // When count down is finished
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<?php
$sr=mysql_query("select ques_id from test_$mid",$cn) or die(mysql_error());
//$srow = mysql_fetch_row($sr);
//$rs=mysql_query("select question, option_1, option_2, option_3, option_4, answer, tid from questions where tid=$srow[0]",$cn) or die(mysql_error());
//mysql_data_seek($sr,0);

if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submitans=='Next Question' && isset($ans))
		{		mysql_data_seek($sr,$_SESSION[qn]);
				$srow = mysql_fetch_row($sr);
				$rs=mysql_query("select question, option_1, option_2, option_3, option_4, answer, tid from questions where tid=$srow[0]",$cn) or die(mysql_error());
				$row= mysql_fetch_row($rs);
				//mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[5])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submitans=='Get Result' && isset($ans))
		{		mysql_data_seek($sr,$_SESSION[qn]);
				$srow = mysql_fetch_row($sr);
				$rs=mysql_query("select question, option_1, option_2, option_3, option_4, answer, tid from questions where tid=$srow[0]",$cn) or die(mysql_error());
				$row= mysql_fetch_row($rs);
				//mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[5])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>$_SESSION[trueans]";
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysql_query("insert into result(login,test_id,test_date,score) values('$loginid','$mid','$rowt[1]',$_SESSION[trueans])") or die(mysql_error());
				unset($_SESSION[qn]);
				unset($_SESSION[midi]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$srow = mysql_fetch_row($sr);
$rs=mysql_query("select question, option_1, option_2, option_3, option_4, answer, tid from questions where tid=$srow[0]",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($sr)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php>Start Again</a>";
exit;
}
mysql_data_seek($sr,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=starttest.php?mid=$mid&tim=$tim>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[0]</style>";
echo "<tr><td class=style8><input type=radio name=ans value=1>$row[1]";
echo "<tr><td class=style8><input type=radio name=ans value=2>$row[2]";
echo "<tr><td class=style8><input type=radio name=ans value=3>$row[3]";
echo "<tr><td class=style8><input type=radio name=ans value=4>$row[4]";
if($_SESSION[qn]<(mysql_num_rows($sr)-1))
{echo "<tr><td><input type=submit name=submitans value='Next Question'></form>";}
else
{echo "<tr><td><input type=submit name=submitans value='Get Result'></form>";}

echo "</table></table>";
?>
</body>
</html>