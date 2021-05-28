<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Message Sent</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['subject'];
$msg = $_POST['message'];

$conn = new mysqli('localhost','root','','testphp');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into info (name,email,subject,message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$name,$email,$sub,$msg);
		$execval = $stmt->execute();
		
		$stmt->close();
		$conn->close();
}
?>


<div class="head" id="head">
	
	<div class="block" id="block">
		<a href="main.php">Portfolio</a>
		<h1>Thank you for your response</h1>
		<a href="fetch.php" class="button" id="button">See other messages</a>
	</div>
</div>


</body>
</html>
