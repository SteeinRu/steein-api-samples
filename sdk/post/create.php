<?php
include_once '../../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


//Without a photo
$create = $steein->get('/post/create', [
    'message'   =>  'Hello @shamsudin'
]);

//or With photo
$response = $steein->post('/media/upload', [
    'media' => $steein->fileToUpload('{full path to the photo}'),
]);
$media = $response->getDecodedBody();

////////
///
///
$create = $steein->get('/post/create', [
    'message'   =>  'Hello @shamsudin',
    'media'     =>  $media['finally']['media_id']
]);

// Or just a photo
$create = $steein->get('/post/create', [
    'media'     =>  $media['finally']['media_id']
]);

$user = $get->getDecodedBody();
