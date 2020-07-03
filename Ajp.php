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
	<form class="form-horizontal" action="aj_code.php" method="POST">
	<div class="form-group">
    <div class="col-sm-6">
    	<label class="radio-inline" style="margin-left: 40px"><input type="radio" name="course" value="AJPDF"  required>PDF</label><br>
    	<label class="radio-inline" style="margin-left: 40px"><input type="radio" name="course" value="AJPPT"  required>PPT</label><br>
       </div>
</div>
	<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary" style="margin-left: 10px">Submit</button>
    </div>
</div>
</form>
</h1>
</text>
</body>
</html>