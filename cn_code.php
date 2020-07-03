<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == CNPDF)
 {
 	header("Location: Computer Network PDF material.php");
 }
 else if($course == CNPPT)
 {
 	header("Location: Computer Network PPT material.php");
 }
 ?>