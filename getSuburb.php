<?php
$term = $_GET['term'];
$temp = array("api_key"=>"{removed}","term"=>$term, "state"=>"nsw","max_results"=>5);
$query = http_build_query($temp);
$list = file_get_contents("http://api.addressify.com.au/address/suburbAutoComplete?$query");
echo $list;