<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$response = $steein->get('/auth/is_email', [
    'email' => 'email@email.com'
]);

$validate = $response->getDecodedBody();


echo $validate['response']; //0 or 1