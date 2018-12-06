<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <script>
        window.alert()
    </script>
    <?php
    include ('./login/Mysql_check.php');
    ?>
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
<div>須審核列表</div>
<?php
$Search_Data = "SELECT * FROM `check_sell_item`";
$result = $link->query($Search_Data);
if ($result->num_rows > 0) { //判斷是否超過1條數據
        while ($row = $result->fetch_assoc()) // 輸出數據
        {
            echo $row['email']."<br>";
            echo $row['title']."<br>";
            echo $row['description']."<br>";
            ?>
            <img src="<?php echo $row['file_path']; ?>"  height="100" width="100">
<?php

            echo $row['price']."<br>";
        }
}
else{
    echo "沒有需要審核的影片"."<br>";
}
?>
</body>
</html>