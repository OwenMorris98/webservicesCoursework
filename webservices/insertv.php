<?php

$servername = "localhost"; // DB Server
$dbname = "webservices";
$username = "root"; // default username to connect to DB is root
$password = ""; // default password to connect to DB is empty, or you can also use root as


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['name'])) {
	$name = $_POST['name']; //get data sent from previous html into indexv.php
}
if (isset($_POST['type'])) {
	$type = $_POST['type']; //get data sent from previous html into indexv.php
}
if (isset($_POST['price'])) { 
	$price = $_POST['price']; //get data sent from previous html into indexv.php
}
// Capture data sent from indexv.php


$sql = "INSERT INTO vegetables (name, type, price)
VALUES ('$name', '$type','$price')"; 

//echo $sql; exit;
// notice single quotes around variables because data is string. For integer or numbers we will not use single quotes.


if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: record couldn’t be inserted";
}
$conn->close(); // close DB connection
?>