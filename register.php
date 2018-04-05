<?php
	session_start();
?>
<!doctype html>
<html id="html">
<head>
	<meta charset="utf-8">
	<title>Register with Us</title>
	<link href="header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

</head>

<body>
	<?php
		include("header.php");
		include("database.php");
		extract($_POST);
	?>
	<div class="top">
		<a id="logo" href="index.php"><img src="logo.jpg"></a>
		<a id="link1" href="index.php"><strong><?php if (isset($_SESSION[loginid])){ Echo "Signout"; } else{ echo "Login"; }?></strong></a>
   		<a id="link1" href="register.html"><strong>Register</strong></a>
		<a id="link1" href="about.php"><strong>About</strong></a>
		<a id="link1" href="contactus.php"><strong>Contact Us</strong></a>
	</div>
	<div class="body">
		<h2>Register With Us</h2>
	<p>To register your institute with us please fill in the form and submit it to us. <br>
		Once approved, you will be able to create new admin accounts. </p>
	<form>
		<label>
			
  			<h3>General Info</h3>
			<p></p>
			<div class="info">
				Enter Institute Name:
				  <input class="input" type="text" name="iname" placeholder="Enter Here" required>
				<br><br>
				Enter Type of Institute:
				<br>
  				<div class="options">
					<input type="radio" name="itype" required> School
					<br>
					<input type="radio" name="itype" required> College
					<br>
				</div>
				<br>
				Enter City:
				<input class="input" type="text" name="city" placeholder="Enter here" required>
				<p></p>
			</div><br>
  				<h3>Contact Details:</h3>
			<div class="info">
				Enter Institute Email ID:
				<input class="input" type="email" name="iemail" placeholder="abc@gmail.com" required>
				<br><br>
				Enter Institute Phone Number:
				<input class="input" type="tel" name="inum" placeholder="+91" required >
				<br><br>
				<input class="input" type="submit" value="Submit">
			</div>
		</label>
	</form>
</div>
</body>
</html>
