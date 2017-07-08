<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');

$response = $steein->post('/media/upload', [
    'media' => $steein->fileToUpload('https://site.com/photo.jpg'),
]);

$media = $response->getDecodedBody();


print_r($media);