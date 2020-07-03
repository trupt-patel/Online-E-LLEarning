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
			<h1>Advanced Java Programming</h1>
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
<h1 style="color: red">AJP:Advanced Java Programming and Code: 2160707</h1>
<br>
<h1>GTU Course pdf:<A href="aj course.pdf">Advanced Java Programming Course</A></h1><br>
<h1>Material in Pdf or ppt :<br>
	<a href="IOprogram.ppt" style="margin-left: 25px">1) IOprogram</a><br>
	<a href="Network programming.ppt" style="margin-left: 25px">2) Network programming</a><br>
	<a href="JDBC.pps" style="margin-left: 25px">3) JDBC</a><br>
	<a href="Transaction Management in JDBC.pptx" style="margin-left: 25px">4) Transaction Management in JDBC</a><br>
	<a href="Introduction to servlet.ppt" style="margin-left: 25px">5) Introduction to servlet</a><br>
	<a href="Programming Servlet.pptx" style="margin-left: 25px">6) Programming Servlet</a><br>
	<a href="filter.ppt" style="margin-left: 25px">7) Filter</a><br>
	<a href="JSP.ppt" style="margin-left: 25px">8) JSP</a><br>
	<a href="Java Bean and Unified EL.pptx" style="margin-left: 25px">9) Java Bean and Unified EL</a><br>
	<a href="Custom Tag Extention API.pptx" style="margin-left: 25px">10) Custom Tag Extention API</a><br>
	<a href="Java Server Face.pptx" style="margin-left: 25px">11) Java Server Face</a><br>
	<a href="PrimeFaces.pptx" style="margin-left: 25px">12) PrimeFaces</a><br>
	<a href="Hibernet.pptx" style="margin-left: 25px">13) Hibernet</a><br>
	<a href="Hibernate Simple Example.docx" style="margin-left: 25px">14) Hibernate Simple Example</a><br>
	<a href="HQL query in Program.txt" style="margin-left: 25px">15) HQL query in Program</a><br>
	<a href="Spring.pdf" style="margin-left: 25px">16) Spring</a><br>
	<a href="Spring Solved Programs.docx" style="margin-left: 25px">17) Spring Solved Programs</a>
</h1>
</text>
</body>
</html>