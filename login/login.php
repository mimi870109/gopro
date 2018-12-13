<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
    <?php include ('../function/save_session.php'); ?>
    <title>登陸/註冊頁面</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--====<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">==-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/css/lobibox.css"/>
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="dist/js/lobibox.js"></script>

</head>
<body>
<div id="autoclickme" style="display: none"><a onclick="reload_href();"></a></div>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">登入</span>
            </div>

            <form  class="login100-form validate-form">
                <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                    <span class="label-input100">帳號</span>
                         <input class="input100" type="text" id="inputemail" placeholder="Enter Email">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                    <span class="label-input100">密碼</span>
                        <input class="input100" type="password" id="inputpasswd" placeholder="Enter password">
                    <span class="focus-input100"></span>
                </div>
                <div class="flex-sb-m w-full p-b-30">
                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                        <label class="label-checkbox100" for="ckb1">記住帳號</label>
                    </div>
                    <div><a href="new_user.php" class="txt1">申請帳號</a></div>
                </div>
                <div class="container-login100-form-btn">
                    <button id="confirm_box"  type="submit" class="login100-form-btn">登入</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!--====<script src="vendor/jquery/jquery-3.2.1.min.js"></script>=======-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>

<!--===<script src="vendor/bootstrap/js/bootstrap.min.js"></script>======-->
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<script src="vendor/countdowntime/countdowntime.js"></script>
<script src="js/main.js"></script>

</body>
<?php
if ($Username!= null){

}
?>
<script>
    function reload_href(){
        window.location.href = "http://210.70.80.21/~s105035041/gopro/buy_item.php";
        alert("登陸成功");
    }
    $("#confirm_box").click(function(){
        var url = "session.php";
        $.ajax({
            type : "POST",
            async : false,  //同步请求
            dataType: "json",
            url : url,
            data : {
                email:$("#inputemail").val(),
                passwd:$("#inputpasswd").val()
            },
            timeout:1000,
            success:function(jsonStr){
                var result = JSON.parse(JSON.stringify(jsonStr));
                if(result.success == '1'){
                    $(document).ready(function () {
                        $('#autoclickme a').get(0).click();
                    });
                }
                else {
                    alert("登陸失敗");
                }
            },
            error:function(){
                alert("失敗，請稍候再試！");
            }
        });
    });
</script>
</html>
