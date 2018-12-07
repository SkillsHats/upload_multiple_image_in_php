<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select Image Files to Upload:
        <input type="file" name="files[]" multiple >
        <input type="submit" name="submit" value="UPLOAD">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>

        $(document).ready(function(){
            $("input[type='submit']").click(function(e){
                var $fileUpload = $("input[type='file']");
                if (parseInt($fileUpload.get(0).files.length)>2){
                    alert("You can only upload a maximum of 2 files");
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>