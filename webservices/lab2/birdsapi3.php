<?php

// birdsapi.php
// xampp/htdocs/webservices

$string = file_get_contents("birds1.json");// URL to access JSON file

$items = json_decode($string, true); // returns array


foreach($items  as  $key => $obj)

{
	if($key=="birds") 
	{
		
    echo $row['name']." ". $row['color']. " " .$row['price'] . <br/>
}

foreach($items['books']  as   $value)
{
    echo $value['name']." ". $value['author']." ".$value['price'] ."<br/>";
}


?>
