<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>販賣影片</title>
    <?php
    include ('./function/save_session.php');
    ?>
    <style>
        #Upload_Form > *{
            margin-top: 10px;
        }
    </style>
    <link rel="stylesheet" href="css/home_page.css">
	<link rel="stylesheet" href="css/bootstrap-3.3.7.css">
    <link href="./css/file-input/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="./css/file-input/themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
    <script src="./css/file-input/js/bootstrap.bundle.js"></script>
    <script src="./css/file-input/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="./css/file-input/js/fileinput.js" type="text/javascript"></script>
	<script src="./css/file-input/js/locales/zh-TW.js" type="text/javascript"></script>
    <script src="./css/file-input/themes/fas/theme.js" type="text/javascript"></script>
    <script src="./css/file-input/themes/explorer-fas/theme.js" type="text/javascript"></script>
    <script>
        function check()
        {
            if(Up_Form.Tile.value == "")
            {
                alert("未輸入標題");
            }
            else if (Up_Form.Introduce == ""){
                alert("未輸入介紹");
            }
            else if (Up_Form.Sell_Price == ""){
                alert("未輸入價格");
            }
            <!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
            else {
                Up_Form.submit();
                document.getElementById("id_iframe").style.display = "block";
                document.getElementById("iframe_box").style.display = "block";
            }
        }
    </script>
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

	
<div class="container my-4">
<hr>
    <form name="Up_Form" id="Upload_Form" method="post" enctype="multipart/form-data" action="function/upload.php" target="id_iframe">
		<?php if($Username == null){ echo '<div style="color: red; text-align: center;"><h3>請先進行登陸 / 註冊</h3></div>';} ?>
		<div class="form-group">
			<h3><label for="exampleInputEmail1">標題  (Title)</label></h3>
			<input type="email" name="Tile" class="form-control" aria-describedby="emailHelp" placeholder="輸入您的標題名稱">
		</div>
		<div class="form-group">
			<h3><label for="exampleInputEmail1">介紹  (Introduction)</label></h3>
			<textarea class="form-control" name="Introduce" id="Textarea" rows="10" placeholder="請介紹您的作品"></textarea>
		</div>
		<div class="form-group">
			<h3><label for="exampleInputEmail1">價格  (Price)</label></h3>
			<input type="email" class="form-control" name="Sell_Price" aria-describedby="emailHelp" placeholder="輸入您的欲售價格">
		</div>
        <div class="file-loading">
          <input id="input_file" name="my_file[]" class="file" type="file" multiple data-browse-on-zone-click="true">
        </div>
        <br>
        <button type="button" onClick="check()" class="btn btn-primary">上傳</button>
        <button type="reset" class="btn btn-outline-secondary">清除</button>
    </form>
    <hr>
    <div id="iframe_box" class="embed-responsive embed-responsive-1by1" style="display:none;">
        <iframe id="id_iframe" name="id_iframe"  class="embed-responsive-item" style="display:none; margin-bottom: 10px;"></iframe>
    </div>
</div>
</body>
<script>
$("#input_file").fileinput({
    language: "zh-TW",
	showPreview:true, 
	showUpload: false,
	validateInitialCount: true
});
</script>
</html>