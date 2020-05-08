
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
	$name=$_POST['name'];
	$comment=$_POST['comment'];
	$location=$_POST['location'];

	$host=mysqli_connect("localhost","root","","spotter");
	    $sdetail="INSERT INTO req VALUES ('','$name','$location','$comment')";
	
	    $res=mysqli_query($host,$sdetail);
	    echo"<h1>YOUR REQUEST HAVE BEEN RECORDED<h1>
        <h2>Your request will be taken into consideration and if camps will be organized you will be soon notified in the camp noticeboard!!  </h2>
     	";
	    
?>

</body>
</html>
