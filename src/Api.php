<?php
namespace Sendle;
class Client {
    public static function HTTPRequest($method, $url, array $headers = [], $postdata = NULL, callable $extraconfig = NULL) {
        $ch = curl_init();

        if ($postdata !== NULL) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            $headers[] = 'Content-Type: application/json';
          }

    curl_setopt_array($ch, [
    
        CURLOPT_POST, 1,
        CURLOPT_URL => $url,
      ]);
      $rawresult = curl_exec($ch);
      $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
      $res_headers = substr($rawresult, 0, $header_size);
      $result = substr($rawresult, $header_size);
      $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      curl_close($ch);
      return [$code, $result];
}
}