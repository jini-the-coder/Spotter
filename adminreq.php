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
	$result = mysqli_query($host,"SELECT * FROM req");
?>
<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Location</th>
<th>Comment</th>
<th>Delete</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['Id'];
		?>
 </td>
<td>
  <?php print $row['Name'];
		?>
 </td>
 <td>
  <?php print $row['Location'];
		?>
 </td>
 <td>
  <?php print $row['Comment'];
		?>
 </td>
 <td>
  <?php
  echo "<form action=reqedit.php?edit=$row[Id] method=post>
  <input type=submit value=Delete>
  </form>
  "; ?>
  </td>
 </tr>
 <?PHP
 }?>
</table>
</body>
</html>