<?php

	$conn = new mysqli('localhost','root','','testphp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else 
	{
		
	$selectquery = "select * from info";

	$query = mysqli_query($conn,$selectquery);
		
	}


	?>

<!DOCTYPE html>
<html>
<head>
	<title>All Messages</title>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>

<div class="head" id="head">
	<div class="block" id="block">
		<a href="main.php">Portfolio</a>
		<h1>All Messages</h1>
		<i class="fas fa-angle-double-down"></i>
	</div>
</div>	
	<table class="table">
		<thead>
		<tr>
			<th>Name</th>
			<th>Messages</th>
		</tr>
		</thead>
		<tbody>
		<?php
		while ($res = mysqli_fetch_array($query)) {
		?>
		<tr>
			<td><?php echo $res['name'];?></td>
			<td><?php echo $res['message'];?></td>
		</tr>
		<?php
		}
		?>			
		</tbody>
	</table>	

</body>
</html>