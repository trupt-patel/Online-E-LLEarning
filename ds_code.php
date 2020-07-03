<?php
 $course  = '';
 $course = $_POST['course'];
 if ($course == DSPDF) 
 {
 	header("Location: Data Structure PDF material.php");
 }
 else if ($course == DSPPT) 
 {
 	header("Location: Data Structure PPT material.php");
 }
 ?>