<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GoPore購買影片</title>
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="css/buy_item.css">
    <?php
    include('./function/Mysql_check.php');
    include ('./function/save_session.php');
    ?>
</head>
<body>
<div class="header">
	<h1>Gopro影片集中地</h1>
</div>
<nav class="Nav_Bar">
	<ul class="drop-down-menu" >
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
		<li><a href="#">購買方案</a>
			<ul>
				<li><a href="#">費率計算</a></li>
				<li><a href="#">年費申請</a></li>
			</ul>
		</li>
		<li><a href="sell_item.php">我要貢獻影片</a></li>
        <?php include('function/admin_check.php'); ?>
        <?php include('login/login1.php'); ?>
        <?php include('login/logout.php'); ?>
	</ul>
</nav>
<?php
$Search_Data = "SELECT * FROM `pass_item`";
$result = $link->query($Search_Data);
if ($result->num_rows > 0) { //判斷是否超過1條數據
while ($row = $result->fetch_assoc()) // 輸出數據
{
?>
<hr>
<div class="content">
    <div class="video_buy">
        <video src="<?php echo $row['file_path']; ?>" controls="controls"></video>
    </div>
    <div class="text_buy">
		<p>名稱:<?php echo $row['title']; ?></p>
		<p>價格:<?php echo $row['price']; ?></p>
		<p>作者:<?php echo $row['email']; ?></p>
		<p>關於:<?php echo $row['description']; ?></p>
	</div>
    <div class="buy_button"><a href="buy_mail.php">立即購買</a></div>
</div>
<hr>


</body>
<?php
}
}
else{
    echo "<div style=\"margin: 30px 56% 10px 44%; color: white; width: 100%; height: 30px; align-content: center\"; ><h3>沒有需要審核的影片</h3></div>";
}
?>