

<?php
$host=mysqli_connect("localhost","root","","spotter");
	$id= $_GET['edit'];
	$sdetails ="DELETE FROM req WHERE  Id=$id";
	$resu=mysqli_query($host,$sdetails);
	echo "Deleted Sucessfully";
	  
  header("refresh:1;url=adminreq.php");
   
   ?>