<?php
session_start();
include('../function/Mysql_check.php');
$email=$_POST['email'];
$passwd=sha1($_POST['passwd']);
$sql="SELECT `email`,`passwd`FROM `user`WHERE `email`='$email'AND`passwd`='$passwd';";
$result=mysqli_query($link,$sql);
$rowNum = mysqli_num_rows($result);
$row=mysqli_fetch_row($result);

if(!empty($email) && !empty($passwd) && $row[0]==$email && $row[1]=($passwd)){
    $_SESSION['username'] = $email;
    include ('../function/save_session.php');
    $Output =  json_encode(['success'=>'1']);
    //   echo "登入成功";
 //  echo'<meta http-equiv="refresh" content="0.5;url=../buy_item.php" />';
}
else{
    $Output =  json_encode(['error'=>'0']);
  //  echo "登入失敗";
  // echo'<meta http-equiv="refresh" content="1;url=./login.php" />';
}
echo $Output;
/**
 * Created by PhpStorm.
 * User: 浩哲
 * Date: 2018/11/17
 * Time: 下午 12:35
 */
?>
