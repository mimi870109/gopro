<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GoPore創作動機</title>
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="css/about.css">
    <?php
        include('./function/Mysql_check.php');
        include ('./function/save_session.php');
    ?>
</head>
<body >
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
		<li><a href="./login/login.php">登入</a></li>
	</ul>
</nav>
<hr>
<center>
    <h1>創作動機</h1>
    <p>靈感是一種心理現象，是攝影創作中表現出來的突發性靈動，它經常出現在創作活動前兆、創作進行中及後期製作中。通過表達慾望和心理意念，去追求視覺感受、情感表露、意境提昇，它是藝術創作重要元素。攝影者平時苦心孤詣，百思不得其解，諸如題材尋覓、畫面營造、氛圍掌控、意涵表達等問題，在外界景物誘導下見景生情而豁然感悟激發靈感，猶如汽油遇到火種頓時爆發，創作意念驀然而起，意即靈感。</p>
    <p>在進行後期製作時，常常會發現自記影片素材有缺少，此網站讓你能夠讓你創作出更好的影片素材。</p>
    <div class="photo1"></div>
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
?>
/**
 * Created by PhpStorm.
 * User: 浩哲
 * Date: 2018/11/15
 * Time: 下午 01:57
 */