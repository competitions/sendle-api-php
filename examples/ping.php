<?php

require __DIR__ . '/../src/Api.php';
use \Sendle\Client;

$sendleId = 'zway_sendle_com';
$apiKey = 'C6yQP9Wv6SpYmqy7Sqnc76WN';
$api_endpoint = 'sendle-sandbox';
$tasks = 'ping';

$sendle = new Client();

print_r($sendle->HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey));