<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == PDF)
 {
 	header("Location: Java PDF Material.php");
 }
 else if($course == PPT)
 {
 	header("Location: Java PPT material.php");
 }
 else if($course == EBOOK)
 {
 	header("Location: Java EBOOK.php");
 }
 ?>