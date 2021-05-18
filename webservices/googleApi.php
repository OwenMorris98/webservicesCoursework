<?php


// API request variables
$endpoint = 'https://www.googleapis.com/books/v1/volumes?q=intitle&key = AIzaSyAhzZzLraEkigtzIY-HkjNc7sJnMKXp3FE';  // URL to call
$version = '1.0.0';  // API version supported by your application
$query = $_GET['query'];  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly
//$string = file_get_contents = 'https://www.googleapis.com/books/v1/volumes?q=intitle&key = AIzaSyAhzZzLraEkigtzIY-HkjNc7sJnMKXp3FE';

$apicall = "$endpoint?";
$apicall .= "OPERATION-NAME=intitle"
//$apicall .= "&SERVICE-VERSION=$version";
//$apicall .= "&paginationInput.entriesPerPage=10";



printr ($apicall); exit;




//$data = json_decode($string, true); 
//foreach (item['intitle'] as $item) {
//echo $item['title'], "<br />;
//}

?>