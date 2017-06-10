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
    'media' => $steein->fileToUpload('https://www.steein.ru/media/p/09061713__9348027651__1905244415593a7e05910456.67801535.jpg'),
];
$response = $steein->post('/media/upload', $data);
$media = $response->getMediaModel();

$data = [
    'post'  => 'Привет @shamsudin, SDK #SteeinAPI включена',
    'media' =>  $media->finally->getMediaId()
];

$response = $steein->post('/posts/create', $data);
$array = $response->getDecodedBody();

var_dump($array);