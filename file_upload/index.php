<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uploading file</title>
</head>
<body>
    <p>uploading file</p>
    <form action="upload.php" enctype="multipart/form-data" method="post">
    <p>select file</p>
    <input type="file" name="file_upload" id="file_upload">
    <br><br><br>
    <input type="submit" name="submit" value="upload">
    </form>
</body>
</html>