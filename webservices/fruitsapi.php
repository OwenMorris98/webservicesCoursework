<?php

// fruitsapi.php


$string = file_get_contents("fruits.json"); // URL to access JSON file

$items = json_decode($string, true); // convert string to array



   foreach($items['fruit']   as   $value) // loop
    {
    		echo $value['name']." ". $value['price']. "<br/>";
   }
   


?>