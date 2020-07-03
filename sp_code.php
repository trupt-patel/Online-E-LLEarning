<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == SPPDF)
 {
 	header("Location: System Programming PDF material.php");
 }
 else if($course == SPPPT)
 {
 	header("Location: System Programming PPT material.php");
 }
 
?>