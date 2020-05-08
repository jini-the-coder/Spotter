<?php
$host=mysqli_connect("localhost","root","","spotter");
$position = $_POST['position'];
$message = $_POST['message'];
if($position=='doctor'){
	$result=mysqli_query($host,"INSERT INTO doctor VALUES ('','$message')");
}
else{
	$result=mysqli_query($host,"INSERT INTO camp VALUES ('','$message')");
}
header("location: notify.php");
?>