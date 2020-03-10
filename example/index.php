<?php
require 'vendor/autoload.php';
//----------------------------
$http = new Z\Http();
$data = ['a' => '1', 'b' => '2', 'c' => '3'];
$result = $http->get('http://tracker.masterd.es/json', $data, true);
//$result = $tools->post('http://tracker.masterd.es/json', $data, true);
var_dump($result);