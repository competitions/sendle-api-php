<?php

require __DIR__ . '/../src/Api.php';
use \Sendle\Client;
$sendle = new Client();

$sendleId = 'zway_sendle_com';
$apiKey = 'C6yQP9Wv6SpYmqy7Sqnc76WN';
$api_endpoint = 'sendle-sandbox';
$tasks = 'quote';
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