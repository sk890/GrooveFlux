<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<title>Groove Flux</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Groove-Flux</a>
				</div>
				<ul class="nav navbar-nav">
					<li ><a href="home.php">Home</a></li>
					<li><a href="collective.php">Collective</a></li>
					<li class="active"><a href="contact.php">Contact</a></li> 
					<li><a href="about.php">About Us</a></li> 
				</ul>
			</div>
		</nav>
		<div  style="margin-top:10%">
			<?php
			$email= $_POST["email"];
			$comment= $_POST["comment"];
			$servername = "localhost";
			$username = "admin";
			$password = "root";
			$dbname = "GrooveFlux";


			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "INSERT INTO contact (Email,Comment)
			VALUES ('{$email}','{$comment}')";

			if ($conn->query($sql) === TRUE) {
				echo "<h1 align=\"center\">Thank You For Your Comment</h1>";
			} else {
				echo "<h1 align=\"center\">Error: " . $sql . "<br>" . $conn->error."</h1>";
			}

			$conn->close();
			?>
		</div>
	</body>
</html>