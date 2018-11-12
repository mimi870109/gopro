<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>販賣影片</title>
    <style>
        #Upload_Form > *{
            margin-top: 10px;
        }
    </style>
</head>
<body>
<form id="Upload_Form" method="post" enctype="multipart/form-data" action="function/upload.php" style="padding: 10px;">
    <input type="file" name="my_file[]" multiple>
    <div>介紹：</div>
    <input type="text" name="Introduce" style="width: 40%;height: 200px;">
    <div>欲售價格：</div>
    <input type="number" name="Sell_Price"> </br>
    <input type="submit" value="Upload" style="margin-left: 37%;">
</form>
</body>
</html>