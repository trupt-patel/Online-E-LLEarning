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
			<h1>Choose Course</h1>
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
<form class="form-horizontal" action="sem_code.php" method="POST">
<div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Choose Course:</label>
    <div class="col-sm-6">
    	<label class="radio-inline"><input type="radio" name="course" value="CPU" required>CPU or C</label><br>
      <label class="radio-inline"><input type="radio" name="course" value="DS" required>DS</label><br>
	  <label class="radio-inline"><input type="radio" name="course" value="DBMS" required>DBMS</label><br>
	   <label class="radio-inline"><input type="radio" name="course" value="OS" required>OS</label><br>
	     <label class="radio-inline"><input type="radio" name="course" value="CO" required>CO</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="CN" required>CN</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="Java" required>Java</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="ADA" required>ADA</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="SP" required>SP</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="WT" required>WT</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="PHP" required>PHP</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="HTML" required>HTML</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="CSS" required>CSS</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="JS" required>JS</label><br>
	      <label class="radio-inline"><input type="radio" name="course" value="SE" required>SE</label>
    </div>
    <br>
    <div class="form-group"> 
     
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </div>
    <br><br><br><br>
  </div>
  </div>
</form>
</text>
</body>
</html>