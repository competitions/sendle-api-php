<?php

require __DIR__ . '/../src/Api.php';
use \Sendle\Client;
$sendle = new Client();

//Get your API Credentials from - https://sandbox.sendle.com/dashboard/api_settings

$apiKey = '';
$sendleId = '';

//Either sendle-sandbox or sendle-prod
$api_endpoint = 'sendle-sandbox';

$tasks = 'quote-international';
$postdata = [
    "pickup_suburb" => 'Sydney',
    "pickup_postcode" =>  '2000',
    "delivery_country" => 'New Zealand',
    "kilogram_weight" => '1'
];


print_r($quote);

print_r($sendle->HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey));