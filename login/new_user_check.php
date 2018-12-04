<?php session_start();?>
<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
<?php
include ("Mysql_check.php");
$name=$_POST['name'];
$email=$_POST['email'];
$type=$_POST['type'];
$passwd=sha1($_POST['passwd']);
$passwd2=sha1($_POST['passwd2']);

if ($name!=""&&$email!=""&&$passwd!=""&&$passwd2!=""&&$passwd=$passwd2){
    echo "輸入資料有誤";
}
else{
    $sql="INSERT INTO `user` (`id`, `name`, `email`, `type`, `passwd`) VALUES (NULL, '', '', '', '')";
    echo "帳號新增成功";
}

/**
 * Created by PhpStorm.
 * User: 浩哲
 * Date: 2018/12/4
 * Time: 下午 07:44
 */