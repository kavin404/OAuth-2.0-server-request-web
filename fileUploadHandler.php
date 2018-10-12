<?php
require_once(realpath(dirname(__FILE__).'/vendor/autoload.php'));
session_start();
$client = new Google_Client();
$client->setAuthConfig('credentials.json');
$client->addScope(Google_Service_Drive::DRIVE_FILE);


if (isset($_SESSION['auth_token']) && $_SESSION['auth_token']) {
    if (is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
        $client->setAccessToken($_SESSION['auth_token']);
        $drive = new Google_Service_Drive($client);

        $file_name = $_FILES['fileToUpload']['name'];

        $fileMetadata = new Google_Service_Drive_DriveFile(array(
            'name' => $file_name));
        $content = file_get_contents(realpath($_FILES['fileToUpload']['tmp_name']));
        try {
            $file = $drive->files->create($fileMetadata, array(
                'data' => $content,
                'uploadType' => 'multipart',
                'fields' => 'id'));

            header('Location:successful-page.php');
        } catch (Exception $e) {
            throw new Exception("Error: " . $e->getMessage());
        }

    } else {
        header('Location:fileUploadTemplate.php');
    }

} else {
    $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] .  '/OAuth-2.0-server-request-web/handler.php';
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
