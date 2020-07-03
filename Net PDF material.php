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
			<h1>.Net</h1>
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
<h1 style="color: red">.Net and Code: 2160711</h1>
<br>
<h1>GTU Course pdf:<A href="net course.pdf">.Net Course</A></h1><br>
<h1>Material in Pdf or ppt :<br>
	<a href="Basics of ASP.pdf" style="margin-left: 25px">1) Basics of ASP</a><br>
	<a href="ASP HTML Server Controls.pdf" style="margin-left: 25px">2) ASP HTML Server Controls</a><br>
	<a href="ASP.NET Page Structure.pdf" style="margin-left: 25px">3) ASP.NET Page Structure</a><br>
	<a href="ASP.NET Page Life Cycle.pdf" style="margin-left: 25px">4) ASP.NET Page Life Cycle</a><br>
	<a href="Difference Between DiffernetTypes of Controls.pdf" style="margin-left: 25px">5) Difference Between DiffernetTypes of Controls</a><br>
	<a href="Introduction to .net.pdf" style="margin-left: 25px">6) Introduction to .net</a><br>
	<a href="Validation Controls.pdf" style="margin-left: 25px">7) Validation Controls </a><br>
	<a href="Instrinsic Web Server Controls.pdf" style="margin-left: 25px">8) Instrinsic Web Server Controls</a><br>
	<a href="ASP NET.pdf" style="margin-left: 25px">9) ASP NET</a><br>
	<a href="Rich controls.pdf" style="margin-left: 25px">10) Rich controls</a><br>
	<a href="ADONET Material.pdf" style="margin-left: 25px">11)ADONET Material </a><br>
	<a href="Command and Data Reader.pdf" style="margin-left: 25px">12) Command and Data Reader</a><br>
	<a href="DataSet.pdf" style="margin-left: 25px">13) DataSet</a><br>
	<a href="ADO.NET Architecture.pdf" style="margin-left: 25px">14) ADO.NET Architecture</a><br>
	<a href="Data Adapter.pdf" style="margin-left: 25px">15) Data Adapter</a><br>
	<a href="ADO.NET Connection Object.pdf" style="margin-left: 25px">16) ADO.NET Connection Object</a><br>
</h1>
</text>
</body>
</html>