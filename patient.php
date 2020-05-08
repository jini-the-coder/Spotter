
<html>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
    background-image: url("i009.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
h1{color:purple ; text-align:center ; padding-top:50px}
h2{color:blue ; text-align:center}
</style>
</head>
<body>
<?PHP
	$fname=$_GET['Fname'];
	$mname=$_GET['Mname'];
	$lname=$_GET['Lname'];
	$age=$_GET['Age'];
 	$gender=$_GET['Gender']; /* varchar */
	$contactno=$_GET['Contactno'];
	$address=$_GET['Address'];
	$state=$_GET['State'];
	
	$host=mysqli_connect("localhost","root","","spotter");
	    $sdetail="INSERT INTO patient VALUES ('$fname','$mname','$lname',$age,'$gender',$contactno,'$address','$state')";
	
	    $res=mysqli_query($host,$sdetail);
		if($res){
	    echo"<h1>DETAILS HAVE BEEN RECORDED<h1>
     	";
}
?>

</body>
</html>