

<?php
$host=mysqli_connect("localhost","root","","spotter");
 if (isset($_POST['transaction']))
   {
	$newName = $_POST['transaction'];
	$id= $_GET['edit'];
	$oldName = $_POST['trans'];

   if($oldName==$newName)
  {
  print "Changes already made";
  }
   else if($oldName=="pending" && $newName=="Allow")
      {
		  $sdetails ="UPDATE volunteerreg SET Transaction='$newName' WHERE  Id=$id";
		  $resu=mysqli_query($host,$sdetails);
		  print "Updated";
      }	
	else if($newName=="Decline") 
{
	$sdetails ="DELETE FROM volunteerreg WHERE  Id=$id";
	$resu=mysqli_query($host,$sdetails);
	echo "Deleted Sucessfully";
}
	  
  header("refresh:1;url=adminvolunteer.php");
   }
   ?>