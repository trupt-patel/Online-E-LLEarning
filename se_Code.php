<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == SEPDF)
 {
 	header("Location: Software Enginnering PDF material.php");
 }
 else if($course == SEPPT)
 {
 	header("Location: Software Enginnering PPT material.php");
 }
 
?>