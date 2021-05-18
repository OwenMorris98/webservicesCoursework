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
$pname = $_POST['pname'];
$quantity = $_POST['quantity'];  
$id = $_POST['ID'];


$sql = "SELECT id, pname, quantity FROM products where pname = '$pname' or quantity = '$quantity' or id = '$id'"; 


//$sql = "SELECT id, pname FROM products where quantity = '$quantity' ";
//$sql = "SELECT id, pname FROM products where id = '$id' ";

//echo $sql;exit; // debugging  
$result = $conn->query($sql); 
if ($result->num_rows > 0) { 
    // output data of each row 
    while($row = $result->fetch_assoc()) { 
         $id = $row["id"]; 
         $displayPname = $row["pname"];
		 $q1uantity = $row["quantity"];
		 
		 
         
          echo " ID &nbsp;&nbsp; Name &nbsp;&nbsp; Quantity <br>";
          echo " $id &nbsp;&nbsp; $displayPname &nbsp;&nbsp; $quantity<br>"; 
    } 
} else { 
    echo "0 results found"; 
} 
?> 