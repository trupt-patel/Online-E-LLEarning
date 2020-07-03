<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == SPPDF)
 {
 	header("Location: Web Technology PDF material.php");
 }
 else if($course == SPPPT)
 {
 	header("Location: Web Technology PPT material.php");
 }
 
?>