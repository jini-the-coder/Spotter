

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
		  $sdetails ="UPDATE doctorreg SET Transaction='$newName' WHERE  Id=$id";
		  $resu=mysqli_query($host,$sdetails);
		  print "Updated";	 
		  $result = mysqli_query($host,"SELECT * FROM doctorreg WHERE Id=$id");
while($row = mysqli_fetch_assoc($result)) 
{
$noc=$row['Name on card'];
$cn=$row['Card number'];
$cvv=$row['CVV'];
 }
$result = mysqli_query($host,"SELECT * FROM bank");
while($row = mysqli_fetch_assoc($result)) 
    {
		$banknoc=$row['Name on card'];
		$bankcn=$row['Card number'];
		$bankcvv=$row['CVV'];
		if($banknoc==$noc && $bankcn==$cn && $bankcvv==$cvv)
		{
			$amt=$row['Amount'];
	}
	}
 $done ="UPDATE bank SET Amount=$amt-1000 WHERE CVV=$cvv";
 $res=mysqli_query($host,$done);
 $cvv=333;
 $done ="UPDATE bank SET Amount=$amt+1000 WHERE CVV=$cvv";
 $res=mysqli_query($host,$done);
 
 }
else if($newName=="Decline") 
{
	$sdetails ="DELETE FROM doctorreg WHERE  Id=$id";
	$resu=mysqli_query($host,$sdetails);
	echo "Deleted Sucessfully";
}
	  
  header("refresh:1;url=admindoctor.php");
   }
   ?>
   
   