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
			<h1>System Programming</h1>
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
<h1 style="color: red">SP: System Programming and Code: 2150708</h1>
<br>
<h1>GTU Course pdf:<A href="sp course.pdf">System Programming Course</A></h1><br>
<h1>Material in Ppt:<br>
	<a href="Theory Topics.pptx" style="margin-left: 25px">1) Theory Topics</a><br>
	<a href="Miscellaneous Topics.pptx" style="margin-left: 25px">2) Miscellaneous Topics</a><br>
	<a href="Intepreter and Debugger.pptx" style="margin-left: 25px">3) Intepreter and Debugger</a><br>
	<a href="Compilers.pptx" style="margin-left: 25px">4) Compilers</a><br>
	<a href="Linker and Loader.pptx" style="margin-left: 25px">5) Linker and Loader</a><br>
	<a href="Macro Processors.pptx" style="margin-left: 25px">6) Macro Processors</a><br>
	<a href="Assemblers.pptx" style="margin-left: 25px">7) Assemblers</a><br>
	<a href="Advanced  Macro Facilities.pptx" style="margin-left: 25px">8) Advanced  Macro Facilities</a><br>
	<a href="Lexical.ppt" style="margin-left: 25px">9) Lexical</a>
</h1>
</text>
</body>
</html>