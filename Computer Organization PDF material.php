<?php
include_once('link.php');
session_start();
$email = $_SESSION['email'];

?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="slide.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body style="background-color: pink">
<nav class="navbar navbar-default">
				<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<li><a href="account.php">Account</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</div>
	<div class="container-fluid">
			<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;background-color: green" id="mySidebar">
				<button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
				<a href="welcome.php" class="w3-bar-item w3-button" >HomePage</a>
				<a href="semister.php" class="w3-bar-item w3-button">Courses</a>
				<a href="Conditions.php" class="w3-bar-item w3-button">Terms And Condtions</a>
				<a href="Privacy.php" class="w3-bar-item w3-button">Privacy And Policy</a>
				<a href="FeedBack.php" class="w3-bar-item w3-button">FeedBack</a>
		</div>		
		<button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
			<h1>Computer Organization</h1>
			<script>
				function w3_open() 
				{
					document.getElementById("mySidebar").style.display = "block";
				}
				function w3_close() 
				{
					document.getElementById("mySidebar").style.display = "none";
				}
			</script>	
		</div>
</nav>
<h1 style="color: red">CO: Comuter Organization and Code: 2140707</h1>
<br>
<h1>GTU Course pdf:<A href="co course.pdf">Computer ORganization Course</A></h1><br>
<h1>Material in Pdf:<br>
	<a href="Basic Computer organization and design.pdf" style="margin-left: 25px">1) Basic Computer organization and design</a><br>
	<a href="Register transfer and micro operation.pdf" style="margin-left: 25px">2) Register transfer and micro operation</a><br>
	<a href="Microprogrammed Control.pdf" style="margin-left: 25px">3) Microprogrammed Control</a><br>
	<a href="Computer Organization and Architecture.pdf" style="margin-left: 25px">4) Computer Organization and Architecture</a><br>
	<a href="Pipeline and Vector Processing.pdf" style="margin-left: 25px">5) Pipeline and Vector Processing</a>
	<a href="Morris Mano.pdf" style="margin-left: 25px">6) Computer Enginnering Reference Book</a>
</h1>
</text>
</body>
</html>