<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == WTPDF)
 {
 	header("Location: Web Techonology and Designing PDF material.php");
 }
 else if($course == WTPPT)
 {
 	header("Location: Web Techonology and Designing PPT material.php");
 }
?>