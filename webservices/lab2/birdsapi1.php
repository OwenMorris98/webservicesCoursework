<?php


// birdsapi1.php

$string = file_get_contents("birds1.json");

// returns object, notice the parameter “true” is not used now
$items = json_decode($string); 

foreach($items->birds   as   $bird)
{
    echo $bird->name. " ". $bird->color." ".$bird->price . "<br/>"; // valid    
   
}


?>
