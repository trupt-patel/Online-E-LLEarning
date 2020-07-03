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
	<a href="Network Programming.pdf" style="margin-left: 25px">1) Network Programming</a><br>
	<a href="JDBC.pdf" style="margin-left: 25px">2)JDBC</a><br>
	<a href="programming jdbc.pdf" style="margin-left: 25px">3) Programming JDBC</a><br>
	<a href="Programming Servlet.pdf" style="margin-left: 25px">4) Programming Servlet</a><br>
	<a href="Servlet.pdf" style="margin-left: 25px">5) Servlet</a><br>
	<a href="GTU Servlet Questions.pdf" style="margin-left: 25px">6) GTU Servlet Questions</a><br>
	<a href="Servlet GTU Programs.pdf" style="margin-left: 25px">7) Servlet GTU Programs</a><br>
	<a href="JSP CustomTag JSTL.pdf" style="margin-left: 25px">8) JSP CustomTag JSTL</a><br>
	<a href="Java Server Faces.pdf" style="margin-left: 25px">9) Java Server Faces</a><br>
	<a href="Hibernate.pdf" style="margin-left: 25px">10) Hibernate</a><br>
	<a href="Spring.pdf" style="margin-left: 25px">11) Spring</a>
</h1>
</text>
</body>
</html>