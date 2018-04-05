<?php
	echo $itype = $_POST['itype'];
	echo $uname = $_POST['username'];
	echo $pass = $_POST['password'];
	$db = mysqli_connect('localhost', 'root', '', 'mini_test');
	if($db)
	{
		echo "connected";
	}
	echo $myq = "select * from user_login where loginid = '$uname'";
	$result = mysqli_query($db,$myq );
	echo mysqli_num_rows($result);
	if(mysqli_num_rows($result)>0)
	{
		echo "login successful";
		if($itype==Teacher)
		{
			header("location:admindashboard.html");
		}
		else
		{
			header("location:studentdashboard.html");
		}
	}
	else
	{
		echo "login fail";
		header("location:loginerror.html");
	}
?>