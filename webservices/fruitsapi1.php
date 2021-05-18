<?php


// birdsapi1.php

$string = file_get_contents("fruits.json");

// returns object, notice the parameter “true” is not used now
$items = json_decode($string); 

foreach($items->fruits   as   $fruit)
{
    echo $fruit->name. " ". $fruit->price. "<br/>"; // valid    
   
}


?>