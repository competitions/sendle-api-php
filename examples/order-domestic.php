<?php
require __DIR__ . '/../src/Api.php';
use \Sendle\Client;

//Get your API Credentials from - https://sandbox.sendle.com/dashboard/api_settings

$apiKey = '';
$sendleId = '';

//Either sendle-sandbox or sendle-prod
$api_endpoint = 'sendle-sandbox';

$tasks = 'order-domestic';

$postdata = '{
  "pickup_date": "2018-05-24",
  "description": "Kryptonite",
  "kilogram_weight": "1",
  "cubic_metre_volume": "0.01",
  "customer_reference": "SupBdayPressie",
  "metadata": {
    "your_data": "XYZ123"
  },
  "sender": {
    "contact": {
      "name": "Lex Luthor",
      "phone": "0412 345 678"
    },
    "address": {
      "address_line1": "123 Gotham Ln",
      "suburb": "Sydney",
      "state_name": "NSW",
      "postcode": "2000",
      "country": "Australia"
    },
    "instructions": "Knock loudly"
  },
  "receiver": {
    "contact": {
      "name": "Clark Kent",
      "email": "clarkissuper@dailyplanet.xyz"
    },
    "address": {
      "address_line1": "80 Wentworth Park Road",
      "suburb": "Glebe",
      "state_name": "NSW",
      "postcode": "2037",
      "country": "Australia"
    },
    "instructions": "Give directly to Clark"
  }
}';

$sendle = new Client();

print_r($sendle->HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey));