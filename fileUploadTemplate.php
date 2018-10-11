<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    </head>

    <body>

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
        <script src="./bootstrap/bootstrap.min.js"></script>
    </body>
</html>




