<?php

//eBay Finding API to search products on eBay, 10 proeducts only, e.g., harry potter
// http://localhost/COSC465/Labs/Lab4-eBay/MySample.php


//error_reporting(E_ALL);  // Turn on all errors, warnings and notices for easier debugging
error_reporting(0);  // Turn off all errors, warnings and notices for easier debugging

// API request variables
$endpoint = 'http://svcs.ebay.com/services/search/FindingService/v1';  // URL to call
$version = '1.0.0';  // API version supported by your application
$appid = 'ImranGha-cosc465-PRD-18bbc5abd-a56d9f9e';  // Replace with your own AppID - Production API
$globalid = 'EBAY-US';  // Global ID of the eBay site you want to search (e.g., EBAY-DE)
$query = $_GET['query'];  // You may want to supply your own query
$safequery = urlencode($query);  // Make the query URL-friendly

// Construct the findItemsByKeywords HTTP GET call
$apicall = "$endpoint?";
$apicall .= "OPERATION-NAME=findItemsByKeywords";
$apicall .= "&SERVICE-VERSION=$version";
$apicall .= "&SECURITY-APPNAME=$appid";
$apicall .= "&GLOBAL-ID=$globalid";
$apicall .= "&keywords=$safequery";
$apicall .= "&paginationInput.entriesPerPage=10";

//print_r( $apicall); exit;

// Load the call and capture the document returned by eBay API
$resp = simplexml_load_file($apicall);



// Check to see if the request was successful, else print an error
if ($resp->ack == "Success") {
  $results = '';
 
 ?>