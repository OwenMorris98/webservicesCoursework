<?php 
$servername = "localhost"; 
$dbname = "webservices"; 
$username = "root"; 
$password = ""; 
// Create connection 
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}  

$name = $_POST['name'];
$email = $_POST['email']; // or you can use this $email = $_POST['email']; 
$id = $_POST['ID'];

/*

$sql = "SELECT id, name FROM users where email= '$email' "; 
$sql = "SELECT id, name FROM users where name = '$name' ";

*/
$sql = "SELECT id, name, email FROM users where id = '$id' or name ='$name'  or email = '$email' ";
//echo $sql;exit; // debugging  


$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
    // output data of each row 
    while($row = $result->fetch_assoc()) { 
	
         $id = $row["id"]; 
         $displayName = $row["name"];
		 $email = $row["email"];
		 
		 
         
          echo " ID &nbsp;&nbsp; Name &nbsp;&nbsp; Email <br>";
          echo " $id &nbsp;&nbsp; $displayName &nbsp;&nbsp; $email<br>"; 
    } 
} else { 
    echo "0 results found"; 
} 
?> 