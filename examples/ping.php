<?php

require __DIR__ . '/../src/Api.php';
use \Sendle\Client;

//Get your API Credentials from - https://sandbox.sendle.com/dashboard/api_settings

$apiKey = '';
$sendleId = '';

//Either sendle-sandbox or sendle-prod
$api_endpoint = 'sendle-sandbox';

$tasks = 'ping';

$sendle = new Client();

print_r($sendle->HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey));