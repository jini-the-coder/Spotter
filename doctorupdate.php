<?php
$host=mysqli_connect("localhost","root","","spotter");
 if (isset($_POST['val']))
   {
	$val=$_POST['val'];
	$id= $_GET['edit'];
      if(is_numeric($val))
      {   
		  $sdetails =" UPDATE doctorreg SET Contactno=$val where Id=$id";
		  $resu=mysqli_query($host,$sdetails);
		  print "Updated";
      }	
	  else{
		  $sdetails =" UPDATE doctorreg SET State=$val where Id=$id";
		  $resu=mysqli_query($host,$sdetails);
		  print "Updated";
	  }
   }
   ?>