<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$response = $steein->post('/auth/register', [
    'last_name' =>  'Сердеров',
    'first_name' => 'Шамсудин',
    'email' => 'email@email.com',
    'password' => 'password'
]);

$register = $response->getDecodedBody();


print_r($register);