<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == ADAPDF)
 {
 	header("Location: Analysis and Design Algorithm PDF material.php");
 }
 else if($course == ADAPPT)
 {
 	header("Location: Analysis and Design Algorithm PPT material.php");
 }
 else if($course == MP)
 {
 	header("Location: Analysis and Design Algorithm video material.php");
 }
?>