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

if (isset($_POST['fullName'])) {
	$fullname = $_POST['fullName']; //get data sent from previous html into index.php
}
if (isset($_POST['email'])) {
	$email = $_POST['email']; //get data sent from previous html into index.php
}
// Capture data sent from index.php
//$fullName = $_POST['fullName']; // get data sent from previous html form on index.php
//$email = $POST['email']; // get data sent from previous html form on index.php

$sql = "INSERT INTO users (name, email)
VALUES ('$fullname', '$email')"; 

//echo $sql; exit;
// notice single quotes around variables because data is string. For integer or numbers we will not use single quotes.


if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: record couldn’t be inserted";
}
$conn->close(); // close DB connection
?>
