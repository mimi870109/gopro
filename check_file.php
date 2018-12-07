<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<?php
	include ('./login/Mysql_check.php');
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>販賣影片</title>
    <style>
        #Upload_Form > *{
            margin-top: 10px;
        }
		.container{
			background-color: white;
			width: 70%;
			height: 335px;
			padding: 1px;
			margin-top: 5px;
		}
		.Input_Group{
			margin: 5px 0px;
			position: relative;
			float: left;
			width: 50%;
			height: 98px;
		}
		.Check_Bt_Group{
			position: relative;
			float: right;
			margin: 130px 60px;
			width: 20%;
			height: 98px;
		}
		.Bt_Box{
			height: 100%;
			width: 100%;
		}
		.Bt_Box > *{
			margin: 8px 0px;
			width: 100%;
		}
		.img-responsive{
			margin: 3px auto;
			max-width: 274px;
			max-height: 180px;
		}
		.Order_Number_Box{
			float: right;
			position: relative;
			font-size: 20px;
			margin: 10px 45px;
		}
    </style>
    <link rel="stylesheet" href="css/home_page.css">
	<link rel="stylesheet" href="css/bootstrap-3.3.7.css">
</head>
<body style="background-color: #808c92; overflow-x: hidden;">
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
<div style="margin: 30px 53% 10px 47%; color: white; width: 100%; height: 30px; align-content: center"; ><h3>須審核列表</h3></div>
<?php
$Search_Data = "SELECT * FROM `check_sell_item`";
$result = $link->query($Search_Data);
if ($result->num_rows > 0) { //判斷是否超過1條數據
        while ($row = $result->fetch_assoc()) // 輸出數據
        {
            ?>
				<div class="container">
					<div class="Input_Group">
						<div class="input-group">
							<span id="addon1" class="input-group-addon">使用者</span>
							<input type="text" class="form-control" placeholder="normal sized input group" value="<?php echo $row['email']; ?>">
						</div>
						<div class="input-group">
							<span class="input-group-addon">標題</span>
							<input type="text" class="form-control" placeholder="placeholder content" value="<?php echo $row['title']; ?>">
						</div>
						<div class="input-group">
							<span class="input-group-addon">介紹</span>
							<input type="text" class="form-control" placeholder="placeholder content" value="<?php echo $row['description']; ?>">
						</div>
							<img src="<?php echo $row['file_path']; ?>" class="img-responsive" alt="Placeholder image">
						<div class="input-group">
							<span class="input-group-addon">價格 NTD$</span>
							<input type="text" class="form-control" placeholder="placeholder content" value="<?php echo $row['price']; ?>">
						</div>
					</div>
					<div class="Order_Number_Box"><span class="label label-primary">訂單編號 : <?php echo $row['id']; ?></span></div>
					<div class="Check_Bt_Group">
						<div class="Bt_Box">
							<button type="button" class="btn btn-default">確認</button>
							<button type="button" class="btn btn-default">拒絕</button>
						</div>
					</div>
				</div>
<?php
        }
}
else{
    echo "<div style=\"margin: 30px 56% 10px 44%; color: white; width: 100%; height: 30px; align-content: center\"; ><h3>沒有需要審核的影片</h3></div>";
}
?>
</body>
</html>