<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GoPore創作動機</title>
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body >
<div class="header">
    <h1 >Gopro影片集中地 </h1>
</div>
<nav class="Nav_Bar">
<ul class="drop-down-menu">
    <li><a href="game.php">關於我們</a>
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
    <li><a href="">購買方案</a>
        <ul>
            <li><a href="#">費率計算</a></li>
            <li><a href="#">年費申請</a></li>
        </ul>
    </li>
    <li><a href="sell_item.php">我要貢獻影片</a></li>
    <li><a href="login/login.php">登入</a></li>
</ul>
</nav>
<hr>
<center>
    <h1>聯絡方式</h1>
    <h3>mimi870109@gmail.com</h3>
    <p>有任何問題請與我聯絡</p>
    <div class="photo3"></div>
</center>
<hr>
<div class="eg-CSS3-transitions">
    滑鼠滑上來看看<br>
    使用CSS3 transitions漸變效果
</div>
<div class="eg-normal">
    滑鼠滑上來看看<br>
    沒有CSS3 transitions漸變效果
</div>



</body>
<?php
echo "現在日期:";
echo date("Y-m-d");
date_default_timezone_set("asia/shanghai");
echo "現在時間:";
echo date("H:i:sa");

?>
/**
 * Created by PhpStorm.
 * User: 浩哲
 * Date: 2018/11/15
 * Time: 下午 06:21
 */