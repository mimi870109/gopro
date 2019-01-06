<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>販賣影片</title>
    <?php
        include('./function/Mysql_check.php');
        include ('./function/save_session.php');
    ?>
    <style>
        #Upload_Form > *{
            margin-top: 10px;
        }
    </style>
    <link rel="stylesheet" href="css/home_page.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap-3.3.7.css"> -->
    <link rel="stylesheet" href="css/file-input/themes/explorer-fas/theme.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="./css/file-input/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- <script src="./css/file-input/js/bootstrap.bundle.js"></script> -->
     <script src="./css/file-input/js/plugins/sortable.js" type="text/javascript"></script>
     <script src="./css/file-input/js/fileinput.js" type="text/javascript"></script>
     <script src="./css/file-input/js/locales/zh-TW.js" type="text/javascript"></script>
     <script src="./css/file-input/themes/fas/theme.js" type="text/javascript" ></script>
     <script src="./css/file-input/themes/explorer-fas/theme.js" type="text/javascript" ></script>

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
              //  Up_Form.submit();
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
        <?php include('function/admin_check.php'); ?>
        <?php include('login/login1.php'); ?>
        <?php include('login/logout.php'); ?>
    </ul>
</nav>

	
<div class="container my-4">
<hr>
    <form name="Up_Form" id="Upload_Form">
		<?php if($Username == null){ echo '<div style="color: red; text-align: center;"><h3>請先進行登陸 / 註冊</h3></div>';} ?>
		<div class="form-group">
			<h3><label for="exampleInputEmail1">標題  (Title)</label></h3>
			<input id="titiLe" type="email" class="form-control" aria-describedby="emailHelp" placeholder="輸入您的標題名稱">
		</div>
		<div class="form-group">
			<h3><label for="exampleInputEmail1">介紹  (Introduction)</label></h3>
			<textarea id="Textarea" class="form-control" rows="10" placeholder="請介紹您的作品"></textarea>
		</div>
		<div class="form-group">
			<h3><label for="exampleInputEmail1">價格  (Price)</label></h3>
			<input id="Price" type="email" class="form-control" aria-describedby="emailHelp" placeholder="輸入您的欲售價格">
		</div>
        <h3><label for="exampleInputEmail1">上傳檔案  (Upload File)</label></h3>
        <div class="file-loading">
          <input id="input_file" name="my_file[]" class="file" type="file" multiple data-browse-on-zone-click="true" data-theme="fas">
        </div>
    </form>
    <hr>
</div>
</body>
<script>
    $("#input_file").fileinput({
        theme: 'fas',
        language: 'zh-TW',  //語言設定
        uploadUrl: './function/upload.php',  //上傳地址
        enctype:'multipart/form-data',
        overwriteInitial: false,
        uploadExtraData:function(){  //向後台傳輸參數
            var data={
                Tile:$("#titiLe").val(),
                Introduce:$("#Textarea").val(),
                Sell_Price:$("#Price").val()
            };
            return data;
        }
    });
</script>
</html>