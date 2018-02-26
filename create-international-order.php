<?php
$data = '{
  "pickup_date": "2015-11-24",
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
      "address_line1": "445 Mount Eden Road",
      "suburb": "Auckland",
      "postcode": "2025",
      "country": "New Zealand"
    },
    "instructions": "Give directly to Clark"
  },
  "contents": {
    "description": "T-shirt",
    "value": "20.00",
    "country_of_origin": "China"
  }
}';
//API Url
$url = 'https://*:*@sandbox.sendle.com/api/orders';

//Initiate cURL.
$ch = curl_init($url);


//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);

echo $result;

?>
