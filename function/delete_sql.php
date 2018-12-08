<?php
/**
 * Created by PhpStorm.
 * User: WIJTB
 * Date: 2018/12/8
 * Time: 上午 11:05
 */
include ('../login/Mysql_check.php');
$Oder_ID = $_POST['Oder_ID'];
$File_Path = '.'.$_POST['File_Path'];
$delete_Sql_Info = "DELETE FROM `check_sell_item` WHERE `id`='$Oder_ID'";
if (mysqli_query($link, $delete_Sql_Info)) {
    echo "刪除資料成功". "<br>";
    if(file_exists($File_Path)){
        unlink($File_Path);//將檔案刪除
        echo "刪除檔案成功". "<br>";
        echo "即將刷新頁面". "<br>";
        echo'<meta http-equiv="refresh" content="0.5;url=../check_file.php" />';
    }
    else{
        echo"檔案不存在". "<br>";
    }
}
else {
    echo "Error: " . $Insert_Sql_Info . "<br>" . mysqli_error($link);
}
