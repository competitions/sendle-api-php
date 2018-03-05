<?php

require __DIR__ . '/../src/Api.php';
use \Sendle\Client;
$sendle = new Client();

//Get your API Credentials from - https://sandbox.sendle.com/dashboard/api_settings

$apiKey = '';
$sendleId = '';

//Either sendle-sandbox or sendle-prod
$api_endpoint = 'sendle-sandbox';

$tasks = 'quote-domestic';
$postdata = [
    "pickup_suburb" => 'Baulkham Hills',
    "pickup_postcode" =>  '2153',
    "delivery_suburb" => 'Barangaroo',
    "delivery_postcode" => '2000',
    "kilogram_weight" => '1',
    "cubic_metre_volume" => '0.1'
];


print_r($quote);

print_r($sendle->HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey));