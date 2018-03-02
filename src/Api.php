<?php
namespace Sendle;

class Client {

    
    public static function HTTPRequest($api_endpoint, $tasks, $postdata,$sendleId,$apiKey) {

        //List of available endpoints
        $endpointsarray = [
            'sendle-sandbox'        => 'https://'.$sendleId.':'.$apiKey.'@sandbox.sendle.com',
            'sendle-prod'        => 'https://api.sendle.com',
        ];
        
        //API endpoint locations
        $pathsarray = [
            'ping' => '/api/ping',
            'order' => '/api/orders',
            'quote' => '/api/quote'
        ];
        
        //List of available tasks/operations
        $tasksarray = [
            'ping' => 'GET',
            'order' => 'POST',
            'quote' => 'GET'
        ];
        
        $url = $endpointsarray[$api_endpoint] . $pathsarray[$tasks];
        if ($pathsarray[$tasks] == '/api/quote') {
            $url = 'https://api.sendle.com/api/quote?pickup_suburb='.rawurlencode($postdata["pickup_suburb"]).'&pickup_postcode='.$postdata["pickup_postcode"].'&delivery_suburb='.rawurlencode($postdata["delivery_suburb"]).'&delivery_postcode='.$postdata["delivery_postcode"].'&kilogram_weight='.$postdata["kilogram_weight"].'&cubic_metre_volume='.$postdata["cubic_metre_volume"];
            $ch = curl_init($url);
        }
        else {
            $ch = curl_init($url);

        }
        //Tell cURL that we want to send a POST request.
        if ($tasksarray[$tasks] == 'POST') {
            curl_setopt($ch, CURLOPT_POST, 1);
        }
        //Attach our encoded JSON string to the POST fields.

        if ($tasksarray[$tasks] == 'POST') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        }
        
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
        
        //Execute the request
       
      $rawresult = curl_exec($ch);
      $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
      $res_headers = substr($rawresult, 0, $header_size);
      $result = substr($rawresult, $header_size);
      $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
      return [$code, $result];
}



}