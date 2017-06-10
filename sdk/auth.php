<?php
include_once '../vendor/autoload.php';

use Steein\SDK\Exceptions\ResponseException;

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);

$oauth = $steein->redirectOAuth();
$scope = ['account','email','posts'];

echo '<a href="'.$oauth->loginForm('{redirect_url}', $scope).'">Login Steein</a>';


if(isset($_GET['callback']))
{
    try {
        $access_token = $oauth->getAccessToken();
    }catch(ResponseException $e) {
        die($e->getMessage());
    }


    echo $access_token->getValue();
}