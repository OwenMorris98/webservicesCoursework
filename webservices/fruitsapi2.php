<?php

// birdsapi.php
// xampp/htdocs/webservices

$string = file_get_contents("fruits2.json");// URL to access JSON file

$items = json_decode($string, true); // returns array


foreach($items['berries']  as   $value)
{
    echo $value['name']." ". $value['price']. "<br/>";
}

foreach($items['melons']  as   $value1)
{
    echo $value['name']." ". $value['price']. "<br/>";
}

?>
