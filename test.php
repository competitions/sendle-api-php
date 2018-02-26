<?php
require '/src/Api.php';
use \Sendle\Client;

$url = 'http://zway_sendle_com:C6yQP9Wv6SpYmqy7Sqnc76WN@sandbox.sendle.com/api/orders';
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