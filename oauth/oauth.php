<?php
include_once '../vendor/autoload.php';

$provider = new \Steein\OAuth2\Client\Steein([
    'clientId'         =>  '{client_id}',
    'clientSecret'     =>  '{client_secret}',
    'redirectUrl'      =>  '{callback_url}',
    'ApiVersion'       =>  '2.0',
]);


if (!isset($_GET['code']))
{
    // Если у нас нет кода авторизации,
    $authUrl = $provider->getAuthorizationUrl();

    echo '<a href="'.$authUrl.'">Авторизация через Steein!</a>';

} else {
    // Попробуйте получить токен доступ (используя грант кода авторизации)
    $token = $provider->getAccessToken('authorization_code', [
        'code' => $_GET['code'],
        'grant_type' => 'authorization_code'
    ]);

    try {
        // Теперь у нас есть токен доступ, давайте теперь узнаем подробности пользователя.
        $user = $provider->getResourceOwner($token);

        // $user->get...();
        echo $user->getDisplayName().'<br />';
        echo $user->getFirstName().'<br />';
    } catch (Exception $e) {
        exit('Что та пошло не так');
    }
}