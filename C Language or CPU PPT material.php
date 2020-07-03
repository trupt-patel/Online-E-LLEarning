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
<h1>Material in Ppt :<br>
	<a href="Introduction to C Language.ppt" style="margin-left: 25px">1) Introduction to C Language </a><br>
	<a href="control structure.ppt" style="margin-left: 25px">2) Control Structure of C Language</a><br>
	<a href="loop program.docx" style="margin-left: 25px">3) looping program</a><br>
	<a href="strings.ppt" style="margin-left: 25px">4) strings</a><br>
	<a href="array.ppt" style="margin-left: 25px">5) array</a><br>
	<a href="string function.ppt" style="margin-left: 25px">6) string function</a><br>
	<a href="structure program.docx" style="margin-left: 25px">7) Structure program</a><br>
	<a href="file program.docx" style="margin-left: 25px">8) File Program</a><br>
	<a href="DMA.ppt" style="margin-left: 25px">9)DMA</a><br>
	<a href="File Management.ppt" style="margin-left: 25px">10)File Management</a><br>
</h1>
</text>
</body>
</html>
	
