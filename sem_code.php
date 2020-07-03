<?php
 $course  = '';
 $course = $_POST['course'];
 if($course == CPU)
{
 	header("Location: C Language or CPU.php");
}
 else if($course == DS)
 {
 	header("Location: Data Structure.php");
 }
 else if($course == DBMS)
 {
 	header("Location: Database.php");
 }
 else if($course == OS)
 {
 	header("Location: Operating System.php");
 }
 else if($course == CO)
 {
 	header("Location: Computer Organization.php");
 }
else if($course == CN)
{
 	header("Location: Computer Network.php");
}
else if($course == Java)
 {
 	header("Location: Java.php");
 }
else if($course == ADA)
 {
 	header("Location:Analysis and Design Algorithm.php");
 }
else if($course == SP)
 {
 	header("Location:System Programming.php");
 }
else if($course == WT)
 {
 	header("Location: Web Techonology and Designing.php");
 }
else if($course == PHP)
 {
 	header("Location: Web Techonology.php");
 }
else if($course == HTML)
{
 	header("Location: Web Techonology in html.php");
}
else if($course == CSS)
{
 	header("Location: Web Techonology in css.php");
}
else if ($course == JS)
{
 	header("Location: Web Techonology in js.php");
}
else
{
  header("Location: SeNetAjp.php");
}
?>