<?php
 $course  = '';
 $course = $_POST['course'];
 if ($course == COPDF) 
 {
 	header("Location: Computer Organization PDF material.php");
 }
 else if ($course == COPPT) 
 {
 	header("Location: Computer Organization PPT material.php");
 }
 ?>