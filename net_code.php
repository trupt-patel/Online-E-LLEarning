<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == NEPDF)
 {
 	header("Location: Net PDF material.php");
 }
 else 
 {
 	header("Location: Net PPT material.php");
 }
 
?>