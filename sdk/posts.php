<?php
include_once '../vendor/autoload.php';

$config = [
    'client_id'                 =>      '{client_id}',
    'client_secret'             =>      '{client_secret}',
    'default_api_version'       =>      'v2.0'
];

$steein = new \Steein\SDK\Steein($config);
$steein->setDefaultAccessToken('{access_token}');
$get = $steein->get('/posts/user_list');

//We pull out one result
$first = $get->getPostModel()->first();

echo 'ID '.$first->getId();
echo  '<br />';
echo 'Text: '. $first->getText();
echo '<br />';

echo '----------';
echo '<br />';

echo 'User ID: '. $first->user->getId();
echo '<br />';
echo 'User FullName: '. $first->user->getName();
echo '<br />';
echo 'User UserName'. $first->user->getUserName();
echo '<br />';
echo 'User Url: '. $first->user->getAccountUrl();
echo '<br />';

echo '----------';
echo '<br />';

echo 'HashTag Text: '. $first->hashtags->getText();
echo '<br />';

echo '----------';
echo '<br />';

echo 'User definition UserId: '. $first->user_definition->getId();
echo '<br />';
echo 'User definition UserName: '. $first->user_definition->getUserName();
echo '<br />';
echo 'User definition FullName: '. $first->user_definition->getName();
echo '<br />';

echo '----------';
echo '<br />';

echo 'Media Image: '. $first->media->getImage();
echo '<br />';

//multiple result
foreach ($get->getPostModel() as $value) {
    var_dump($value);
}