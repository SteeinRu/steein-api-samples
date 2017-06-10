<?php
include_once '../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');


$get = $steein->get('/account/show');
$user = $get->getUserModel();

echo 'ID: '. $user->getId();
echo '<br />';
echo 'FullName'. $user->getFullName();
echo '</br />';
echo 'Email'. $user->getEmail();
echo '<br />';
echo 'UserName'. $user->getUserName();


echo '<br />';
echo '-------------';
echo '<br />';
var_dump($user->all());