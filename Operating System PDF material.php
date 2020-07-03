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
			<h1>Operating System</h1>
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
<h1 style="color: red">OS: Operating System and code: 2140702</h1>
<br>
<h1>GTU Course pdf:<A href="os course.pdf">Operating System Course</A></h1><br>
<h1>Material in Pdf :<br>
	<a href="Introduction to Operating System.pdf" style="margin-left: 25px">1) Introduction to Operating System </a><br>
	<a href="Process Management.pdf" style="margin-left: 25px">2) IProcess Management </a><br>
	<a href="Interprocess Communication.pdf" style="margin-left: 25px">3) Interprocess Communication </a><br>
	<a href="Deadlocks.pdf" style="margin-left: 25px">4) Deadlocks</a><br>
	<a href="IO Management.pdf" style="margin-left: 25px">5) IO Management</a><br>
	<a href="File Management.pdf" style="margin-left: 25px">6) File Management</a><br>
	<a href="Security and Protection.pdf" style="margin-left: 25px">7) Security and Protection</a><br>
	<a href="UNIX.pdf" style="margin-left: 25px">8) UNIX</a><br>
		
</h1>
</text>
</body>
</html>
	