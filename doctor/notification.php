<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.css" type = "text/css"/>
<link rel = "stylesheet" href = "../bootstrap/css/bootstrap.min.css" type = "text/css"/>
</head>
<body>
<div id="main" class="container">
<table class="table table-bordered">
<h2 align="center">Doctor Notice Board</h2><hr/>
    <tbody>
      <tr>
        <td><div id="content">
			<?php
			$host=mysqli_connect("localhost","root","","spotter");
			$result = mysqli_query($host,"SELECT * FROM doctor");
					while($row = mysqli_fetch_array($result))
						{
							echo '<li>'.$row['message'].'</li>';
							echo '<hr>';
						}
			?>
			<div class="clearfix"></div>
			</div></td>
      </tr>
    </tbody>
</table>
</body>
</html>
