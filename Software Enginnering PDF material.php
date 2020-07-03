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
			<h1>Software Enginnering</h1>
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
<h1 style="color: red">SE: Software Engineering and Code: 2160701</h1>
<br>
<h1>GTU Course pdf:<A href="se course.pdf">Software Engineering Course</A></h1><br>
<h1>Material in Pdf:<br>
	<a href="Introduction to Software and Software Engineering.pdf" style="margin-left: 25px">1) Introduction to Software and Software Engineering </a><br>
	<a href="Agile_Development.pdf" style="margin-left: 25px">2) Agile_Development</a><br>
	<a href="Manageing Software Project.pdf" style="margin-left: 25px">3) Manageing Software Project</a><br>
	<a href="Requirement Analysis and Specification.pdf" style="margin-left: 25px">4) Requirement Analysis and Specification</a><br>
	<a href="Risk Management.pdf" style="margin-left: 25px">5) Risk Management</a><br>
	<a href="Quality Assurance and Management Advanced Software Enginnering" style="margin-left: 25px">6) Quality Assurance and Management Advanced Software Enginnering</a><br>
	<a href="Software Design.pdf" style="margin-left: 25px">7) Software Design</a><br>
	<a href="Software Testing.pdf" style="margin-left: 25px">8) Software Testing</a><br>

</h1>
</text>
</body>
</html>