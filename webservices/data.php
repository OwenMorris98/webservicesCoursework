<?php

// Retreving data fron DB and returning it for API Consumer//

function get_price($name)
{
    //Read data from DB table

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
	

    
    $sql = "SELECT price, make, model, year FROM vehicles_pinefalls where make ='$name' order by price asc limit 1";
    $result = $conn->query($sql);

    $info=mysqli_fetch_array($result,MYSQLI_ASSOC);

   return $info;
}
?>
