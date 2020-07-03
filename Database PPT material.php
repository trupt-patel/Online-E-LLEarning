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
			<h1>DataBase Management System</h1>
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
<h1 style="color: red">DBMS: DataBase Management and code:3130703</h1>
<br>
<h1>GTU Course pdf:<A href="dbms course.pdf">Database Management Course</A></h1><br>
<h1>Material in Pdf :<br>
	<a href="Introduction to DataBase.ppt" style="margin-left: 25px">1) Introduction to Database </a><br>
	<a href="E-R model.ppt" style="margin-left: 25px">2) E-R model </a><br>
	<a href="Tuple Relational.pptx" style="margin-left: 25px">3) Tuple Relational </a><br>
	<a href="Entity Relationship Diagrams.docx" style="margin-left: 25px">4) Entity Relationship Diagrams</a><br>
	<a href="Functional dependencies.ppt" style="margin-left: 25px">5) Functional dependencies</a><br>
	<a href="Normalization examples.ppt" style="margin-left: 25px">6) Normalization examples</a><br>
	<a href="sql.ppt" style="margin-left: 25px">7) SQL</a><br>
	<a href="Normalization concepts.ppt" style="margin-left: 25px">8) Normalization concepts</a><br>
	<a href="final PLSQL.ppt" style="margin-left: 25px">9) final PLSQL</a><br>	
	<a href="PLSQL Concepts.docx" style="margin-left: 25px">10) PLSQL Concepts</a><br>
	<a href="SQL SubQueries.pptx" style="margin-left: 25px">11) SQL SubQueries</a><br>
	<a href="PLSQL block Example.txt" style="margin-left: 25px">12) PLSQL block Example</a><br>
</h1>
</text>
</body>
</html>
	