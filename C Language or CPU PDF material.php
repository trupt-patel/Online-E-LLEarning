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
			<h1>C Language or CPU</h1>
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
<h1 style="color: red">C Language or CPU: Computer Programming and Utilization and Code: 2110003</h1>
<br>
<h1>GTU Course pdf:<A href="cpu course.pdf">CPU Course</A></h1><br>
<h1>Material in Pdf :<br>
	<a href="Computer Fundamentals and Flowchart.pdf" style="margin-left: 25px">1) Computer Fundamentals and Flowchart </a><br>
	<a href="Operators and Expression.pdf" style="margin-left: 25px">2) Operators and Expression</a><br>
	<a href="Concept of C Language.pdf" style="margin-left: 25px">3) Concept of C Language</a><br>
	<a href="Decision Making Control Structure.pdf" style="margin-left: 25px">4) Decision Making Control Structure</a><br>
	<a href="Looping Control Structure.pdf" style="margin-left: 25px">5) Looping Control Structure</a><br>
	<a href="Input out put function.pdf" style="margin-left: 25px">6) Input out put function</a><br>
	<a href="Array and String Programs.pdf" style="margin-left: 25px">7) Array and String Programs</a><br>
	<a href="CPU MCQ.pdf" style="margin-left: 25px">8) CPU MCQ</a><br>
	<a href="Extra MCQs.pdf" style="margin-left: 25px">9) Extra CPU MCQ</a><br>
	<a href="pointer, structure and union .pdf" style="margin-left: 25px">10) pointer, structure and union </a><br>
	<a href="structure and union .pdf" style="margin-left: 25px">11) structure and union </a><br>
	<a href="Structure.pdf" style="margin-left: 25px">12) Structure</a><br>
	<a href="DMA.pdf" style="margin-left: 25px">13) DMA</a><br>
	<a href="Pointers.pdf" style="margin-left: 25px">14) Ponters</a><br>
	<a href="UDF.pdf" style="margin-left: 25px">15) UDF</a><br>
	<a href="Array.pdf" style="margin-left: 25px">16) Array</a><br>
	<a href="Basic Operators.pdf" style="margin-left: 25px">17) Basic Operators</a><br>
	<a href="Basics.pdf" style="margin-left: 25px">18) Basics</a><br>
	<a href="Control Statement.pdf" style="margin-left: 25px">19) Control Statement</a><br>
	<a href="Function.pdf" style="margin-left: 25px">20) Functions</a><br>
	<a href="Loops.pdf" style="margin-left: 25px">21) Loops</a><br>
	<a href="pointer.pdf" style="margin-left: 25px">22) Pointer Related basic Knowledge</a><br>
	<a href="Strings.pdf" style="margin-left: 25px">23) Stirngs</a><br>
</h1>
</text>
</body>
</html>
	