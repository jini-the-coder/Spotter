<head>
<style>
body, html {
    background-image: url("images/bg1.jpg");
	 background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<style>

table , th,td{border:1.5px solid darkblue ; border-collapse:collapse}
th{height:50px ; color:blue; font-size:20px ; width:60px}
tr{width:60px ; padding-right:20px}
td{  font-size:18px ; color:darkgreen ; text-align:center}
table{width:100%}
input[type="submit"]{width:50%}
input[type="text"]{width:90%}
</style>
<body>

<?PHP
	
	$host=mysqli_connect("localhost","root","","spotter");
	$result = mysqli_query($host,"SELECT * FROM doctorreg");
?>
<table>

<tr>
<th>Firstname</th>
<th>Middlename</th>
<th>Lastname</th>
<th>Contactno</th>
<th>Location</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{
	if($row['Transaction'] == "Allow"){?>

<tr>
<td>
  <?php print $row['Firstname'];
		?>
 </td>
 <td>
  <?php print $row['Middlename'];
		?>
 </td>
 <td>
  <?php print $row['Lastname'];
		?>
 </td>
 <td>
  <?php print $row['Contactno'];
		?>
 </td>
 <td>
  <?php print $row['State'];
		?>
 </td>
 </tr>
 <?PHP
	}}?>
</table>
</body>
</html>