<?php
 $course  = '';
 $course = $_POST['course'];
 if ($course == OSPDF) 
 {
 	header("Location: Operating System PDF material.php");
 }
 else if ($course == OSPPT) 
 {
 	header("Location: Operating System PPT material.php");
 }
 ?>