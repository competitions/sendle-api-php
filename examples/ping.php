<?php

require __DIR__ . '/../src/Api.php';
use \Sendle\Client;

$sendleId = '';
$apiKey = '';
$api_endpoint = 'sendle-sandbox';
$tasks = 'ping';

$sendle = new Client();

print_r($sendle->HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey));