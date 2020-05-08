<?php
$host=mysqli_connect("localhost","root","","spotter");
$id= $_GET['edit'];
$result=mysqli_query($host,"DELETE FROM doctor WHERE Id=$id");
header("location: notify.php");
?>