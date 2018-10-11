
<?php

require_once(realpath(dirname(__FILE__).'/vendor/autoload.php'));

session_start();

$redirectURL = 'http://'.$_SERVER['HTTP_HOST'].'/OAuth-2.0-server-request-web/handler.php';
$uploadURL = 'http://'.$_SERVER['HTTP_HOST'].'/OAuth-2.0-server-request-web/fileUploadHandler.php';


$client = new Google_Client();
$client->setAuthConfigFile('credentials.json');
$client->setRedirectUri($redirectURL);
$client->addScope(Google_Service_Drive::DRIVE_FILE);

if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));

} else {
  $client->authenticate($_GET['code']);
  $_SESSION['auth_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($uploadURL, FILTER_SANITIZE_URL));
}
