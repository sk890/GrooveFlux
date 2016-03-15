<?php
$servername="localhost";
$username="admin";
$password="root";

$connection= new mysqli($servername,$username,$password);

if ($connection->connect_error){
	die("Connection Failed: ".$connection->connect_error());
}

echo "Connection Succesful</br>";

$sql="CREATE DATABASE GrooveFlux";

if ($connection->query($sql) === TRUE){
	echo "Database users_db created</br>";
}
else{
	echo "Error Creating DB: " . $connection->error.'</br>';
}

$connection= new mysqli($servername,$username,$password,'GrooveFlux');

$sql="CREATE TABLE contact(
Email VARCHAR(30),
Comment VARCHAR(500)
)";

if ($connection->query($sql) ===TRUE){
	echo "Table peoples created</br>";
}
else{
	echo "Error Creating Table: " . $connection->error.'</br>';
}

$connection->close();
?>