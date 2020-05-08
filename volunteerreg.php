
<html>
<head>
<style>
body, html {
    height: 100%;
    margin: 0;
    background-image: url("bg1.jpg");
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
	$file=$_GET['File'];
	$trans="pending";
	
	$host=mysqli_connect("localhost","root","","spotter");
	    $sdetail="INSERT INTO volunteerreg VALUES ('','$fname','$mname','$lname',$age,'$gender',$contactno,'$address','$state','$file','$trans')";
	
	    $res=mysqli_query($host,$sdetail);
	    echo"<h1>YOUR DETAILS HAVE BEEN RECORDED<h1>
        <h2>USE GIVEN ID TO CONFIRM YOUR ACCOUNT </h2>
         <h1> YOUR ID IS </h1>
     	";
	
	    $last_id = mysqli_insert_id($host);
        echo "<h2><span style=font-size:60px >".$last_id."</spna></h2>";	
?>

</body>
</html>