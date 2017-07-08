<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$response = $steein->get('/likes/is_liked',[
    'item_id' => 1,
    'type' => 'post'
]);

$delete = $response->getDecodedBody();
print_r($delete);