<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == AJPDF)
 {
 	header("Location: Advanced Java PDF material.php");
 }
 else 
 {
 	header("Location: Advanced Java PPT material.php");
 }
 
?>