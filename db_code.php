<?php
 $course  = '';
 $course = $_POST['course'];
  if ($course == DBMSPDF) 
 {
 	header("Location: Database PDF material.php");
 }
 else if ($course == DBMSPPT) 
 {
 	header("Location: Database PPT material.php");
 }
 ?>