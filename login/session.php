<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include ('Mysql_check.php');

$email=$_POST['email'];
$passwd=sha1($_POST['passwd']);
$sql="SELECT `email`,`passwd`FROM `user`WHERE `email`='$email'AND`passwd`='$passwd';";
//echo $sql;
$result=mysqli_query($link,$sql);
$rowNum = mysqli_num_rows($result);
$row=mysqli_fetch_row($result);

if(!empty($email) && !empty($passwd) && $row[0]==$email && $row[1]=($passwd)){
    $_SESSION['username']=$email;
    echo "登入成功";
    echo'<meta http-equiv="refresh" content="2.5;url=../buy_item.php" />';
}else{

    echo "登入失敗";
    echo'<meta http-equiv="refresh" content="1;url=login.php" />';

}
echo "id=$email<br/>";
?>
/**
* Created by PhpStorm.
* User: 浩哲
* Date: 2018/11/17
* Time: 下午 12:35
*/