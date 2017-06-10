<?php
include_once '../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');
$get = $steein->get('/posts/show/1');
$post = $get->getPostModel();

echo $post->getId();

echo '<pre>';
    print_r($post->all());
echo '</pre>';