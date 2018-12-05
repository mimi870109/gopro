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
    <link rel="stylesheet" href="css/home_page.css">
</head>
<body>
<div class="header">
    <h1>Gopro影片集中地</h1>
</div>
<nav class="Nav_Bar">
    <ul class="drop-down-menu" >
        <li><a href="game.html">關於我們</a>
            <ul>
                <li><a href="creation.php">創作動機</a></li>
                <li><a href="equipment.php">拍攝器材</a></li>
                <li><a href="connection%20.php">聯絡方式</a></li>
            </ul>
        </li>
        <li><a href="buy_item.php">購買作品</a>
            <ul>
                <li><a href="#">經典作品</a></li>
                <li><a href="#">購買素材</a></li>
            </ul>
        </li>
        <li><a href="#">教學專案</a>
            <ul>
                <li><a href="#">費用計算</a></li>
                <li><a href="#">準備器材</a></li>
            </ul>
        </li>
        <li><a href="#">購買方案</a>
            <ul>
                <li><a href="#">費率計算</a></li>
                <li><a href="#">年費申請</a></li>
            </ul>
        </li>
        <li><a href="sell_item.php">我要貢獻影片</a></li>
        <li><a href="./login/login.php">登入</a></li>
    </ul>
</nav>
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