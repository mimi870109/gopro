<?php 
include('./Mysql_check.php');
include ('./save_session.php');
$admin_sql = "SELECT * FROM `permission_check` WHERE `email`='$Username' AND `permission`=1";
if(mysqli_query($link, $admin_sql)){
    echo '您是管理員';
}
else{
    echo '您沒有權限';
}
?>