<?php
$host=mysqli_connect("localhost","root","","spotter");
$position = $_POST['position'];
$message = $_POST['message'];
if($position=='volunteer'){
	$result=mysqli_query($host,"INSERT INTO volunteer VALUES ('','$message')");
}
header("location: notifyvolunteer.php");
?>