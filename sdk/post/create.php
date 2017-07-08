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
$response = $steein->get('/post/create', [
    'message'   =>  'Hello @shamsudin'
]);

//or With photo
$response_media = $steein->post('/media/upload', [
    'media' => $steein->fileToUpload('{full path to the photo}'),
]);
$media = $response_media->getDecodedBody();

////////
///
///
$response = $steein->get('/post/create', [
    'message'   =>  'Hello @shamsudin',
    'media'     =>  $media['finally']['media_id']
]);

// Or just a photo
$response = $steein->get('/post/create', [
    'media'     =>  $media['finally']['media_id']
]);

$create = $response->getDecodedBody();
