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
        <div class="box">
            <div class="row title">
                Google Drive Uploader V 1.0
            </div>
            <div class="row logo">
                <img src="./assets/GoogleDriveLogo.svg" height="100px" width="100px">
            </div>
            <form method="post" action="fileUploadHandler.php" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" class="form-control-file" name="fileToUpload">
            </div>
            <div class="form-group no-margin">
                <button type="submit" class="btn btn-primary">
                    Upload File
                </button>
            </div>
        </form>
        </div>
    </div>
      
    </body>
</html>




