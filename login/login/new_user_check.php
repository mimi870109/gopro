<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<?php
include('../function/Mysql_check.php');
$name=$_POST['name'];
$email=$_POST['email'];
$type=$_POST['type'];
$passwd=sha1($_POST['passwd']);
$passwd2=sha1($_POST['passwd2']);

echo $name."<br>".$email."<br>".$passwd."<br>".$passwd2;

if ($name!=""&&$email!=""&&$passwd!=""&&$passwd2!=""&&$passwd==$passwd2) {
    $sql = "INSERT INTO `user` (`id`, `name`, `email`, `type`, `passwd`) VALUES (NULL,'$name','$email','$type','$passwd')";
    if (mysqli_query($link, $sql)) {
        echo "帳號新增成功";
    }else{echo "新增失敗";}
}else{echo "輸入資料有誤";}
/**
 * Created by PhpStorm.
 * User: 浩哲
 * Date: 2018/12/4
 * Time: 下午 07:44
 */