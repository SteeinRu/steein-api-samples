<?php
include_once '../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$data = [
    'post' => 'Привет @shamsudin, SDK #SteeinAPI включена'
];

$response = $steein->post('/posts/create', $data);
$array = $response->getDecodedBody();

var_dump($array);