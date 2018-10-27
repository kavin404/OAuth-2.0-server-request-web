<!DOCTYPE html>
<html>

<head>
    <title>OAuth 2.0 Authentication Framework</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <div class="col-sm-6 col-sm-offset-3 sucessful">
            <div class="row title">
                Google Drive Uploader V 1.0
            </div>
            <div class="row logo">
                <img src="./assets/GoogleDriveLogo.svg" height="100px" width="100px">
            </div>
        
            <p class="white-color"> You file upload was sucessful please check your Google Drive</p>
            <p><a href="https://drive.google.com/open?id=<?php
             session_start();
             echo 
             $_SESSION['result-id']; ?>" target="_blank">Check your file here</a></p>
        </div>
    </div>
</body>

</html>