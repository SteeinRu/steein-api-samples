<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$get = $steein->get('/users/following',['id' => 1]);
$following = $get->getDecodedBody();


print_r($following);