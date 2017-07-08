<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$response = $steein->get('/post'); //$steein->get('/post',['user_id' => 1]);
$post = $response->getDecodedBody();


print_r($post);