<!doctype html>
<head>
<?php
	include('./function/Mysql_check.php');
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>販賣影片</title>
    <link rel="stylesheet" href="css/home_page.css">
	<link rel="stylesheet" href="css/bootstrap-3.3.7.css" type="text/css">
    <link rel="stylesheet" href="css/check_file.css" type="text/css">
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
</head>
<body style="background-color: #808c92; ">
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
<div class="Check_title_box"><h3>需審核列表</h3></div>
<div id="Big_Box" href="#">
<?php
$Search_Data = "SELECT * FROM `check_sell_item`";
$result = $link->query($Search_Data);
if ($result->num_rows > 0) { //判斷是否超過1條數據
        while ($row = $result->fetch_assoc()) // 輸出數據
        {
            ?>
		<div class="container">
			<div class="left_box">
			  <div>
				  <div class="input-group"><span id="addon1" class="input-group-addon">使用者</span>
					<input type="text" class="form-control" placeholder="normal sized input group" aria-describedby="addon1" value="<?php echo $row['email']; ?>">
				</div>
				  <div class="input-group"><span id="contentaddon1" class="input-group-addon">標題</span>
					<input type="text" class="form-control" placeholder="placeholder content" aria-describedby="contentaddon1" value="<?php echo $row['title']; ?>">
					</div>
				  <div class="input-group"><span class="input-group-addon">介紹</span>
					<input type="text" class="form-control" placeholder="placeholder content" value="<?php echo $row['description']; ?>"></div>
				  <div class="resourse">
					  <img src="<?php echo $row['file_path']; ?>" class="img-responsive" alt="Placeholder image">
				  </div>
					  <div class="input-group"><span class="input-group-addon">價格 NTD$</span>
					<input type="text" class="form-control" placeholder="placeholder content" value="<?php echo $row['price']; ?>"></div>
			  </div>
			</div>
			<div class="right_box">
				<div class="ID_box">
				<span class="label label-primary">訂單編號：<?php echo $row['id']; ?></span> 
				</div>
				<div class="Buttob_box">
					<form class="confirm_box">
						<input id="ID" style="display: none;" value="<?php echo $row['id']; ?>">
						<input id="FILE_PATH" style="display: none;" value="<?php echo $row['file_path']; ?>">
						<input id="USERNAME" style="display: none;" value="<?php echo $row['email']; ?>">
						<input id="TITLE" style="display: none;" value="<?php echo $row['title']; ?>">
						<input id="INTRODUCE" style="display: none;" value="<?php echo $row['description']; ?>">
						<input id="SELL_PRICE" style="display: none;" value="<?php echo $row['price']; ?>">
						<button type="submit" class="btn btn-default check_bt">確認</button>
				  </form>
					<form class="cancel_box">
						<input id="DELET_ID" style="display: none;" value="<?php echo $row['id']; ?>">
						<input id="DELET_FILE_PATH" style="display: none;" value="<?php echo $row['file_path']; ?>">
						<button type="submit" class="btn btn-default check_bt">拒絕</button>
					</form>
			  </div>
			</div>
			<div style="clear:both; display: none;"></div>
		</div>
<?php
        }
}
else{
    echo "<div style=\"margin: 30px 56% 10px 44%; color: white; width: 100%; height: 30px; align-content: center\"; ><h3>沒有需要審核的影片</h3></div>";
}
?>
</div>
</body>
<!------確認按鈕ajax----->
<script>
    $(".confirm_box").click(function(){
        var url = "function/addtobuylist.php";
        $.ajax({
            type : "POST",
            async : false,  //同步请求
            dataType: "json",
            url : url,
            data : {
                Oder_ID:$('#ID').val(),
                File_Path:$('#FILE_PATH').val(),
                Username:$('#USERNAME').val(),
                Tile:$('#TITLE').val(),
                Introduce:$('#INTRODUCE').val(),
                Sell_Price:$('#SELL_PRICE').val()
            },
            timeout:1000,
            success:function(){
                $("#Big_Box").html(div).fadeIn().delay(2000);//要刷新的div
            },
            error: function() {
                alert("失敗，請稍候再試！");
            }
        });
    });


    <!------拒絕按鈕ajax----->
    $(".cancel_box").click(function(){
        var url = "function/delete_sql.php";
        $.ajax({
            type : "POST",
            async : false,  //同步请求
            dataType: "json",
            url : url,
            data : {
                Oder_ID:$('#DELET_ID').val(),
                File_Path:$('#DELET_FILE_PATH').val()
            },
            timeout:1000,
            success:function(){
                $("#Big_Box").html(div).fadeIn().delay(2000);//要刷新的div
            },
            error: function() {
                 alert("失敗，請稍候再試！");
            }
        });
    });
</script>
</html>