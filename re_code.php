<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == SE)
{
 	header("Location: Software Engineering.php");
}
else if($course == NET)
{
	header("Location: Net.php");
}
else
{
	header("Location: Ajp.php");
}
?>