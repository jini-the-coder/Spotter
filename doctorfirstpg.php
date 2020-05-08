
<html>
<head>
<style>
body, html {
    background-image: url("images/bg1.jpg");
	 background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
p{font-size:40px ; color:darkblue ; font-family:cursive ; text-align:center ; padding-top:100px}
</style>

<body>
<?php
$host=mysqli_connect("localhost","root","","spotter");

	$id= $_GET['edit'];
    $result = mysqli_query($host,"SELECT * FROM doctorreg WHERE Id=$id");
?>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
	<p>
  <?php print $row['Firstname'];
		?>
 
  <?php print $row['Middlename'];
		?>
 
  <?php print $row['Lastname'];
		?></p>
		<fieldset>
		<legend><h1><b>Update contact no </b></h1></legend> 
	
	<?php
  echo "<form action=doctorupdate.php?edit=$row[Id] method=post>
  <label>New Contact no: </label>
  <input type=number name=val>
  <input type=submit value=Set>
  </form>
  "; ?>
   </fieldset>
   
<fieldset>
<legend><h1><b>Update location </b></h1></legend>
<?php
  echo "<form action=doctorupdate.php?edit=$row[Id] method=post>
  <label>New location :</label>
  <input type=text name=val>
  <input type=submit value=Set>
  </form>
  "; ?>
   </fieldset>
 <?PHP
 }?>
 