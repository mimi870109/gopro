<?php
/**
 * Created by PhpStorm.
 * User: WIJTB
 * Date: 2018/12/8
 * Time: 上午 11:09
 */
include('./Mysql_check.php');
$Oder_ID = $_POST['Oder_ID'];
$Tile = $_POST['Tile'];
$Introduce = $_POST['Introduce'];
$File_Path = $_POST['File_Path'];
$Sell_Price = $_POST['Sell_Price'];
$Username = $_POST['Username'];
//////////////////////////////////////////////////////////////////////////////////SQL指令
$delete_Sql_Info = "DELETE FROM `check_sell_item` WHERE `id`='$Oder_ID'";
$Insert_Sql_Info = "INSERT INTO `pass_item`(`email`, `title`, `description`, `file_path`, `price`) VALUES ('$Username','$Tile','$Introduce','$File_Path','$Sell_Price')";
//////////////////////////////////////////////////////////////////////////////////
if (mysqli_query($link, $Insert_Sql_Info) and mysqli_query($link, $delete_Sql_Info)) {
    echo json_encode(['success'=>'success']);
   // echo "插入資料成功". "<br>";
   // echo "刪除資料成功". "<br>";
   // echo "即將刷新頁面". "<br>";
   // echo'<meta http-equiv="refresh" content="0.5;url=../check_file.php" />';
}
else {
  //  echo "Error: " . $Insert_Sql_Info . "<br>" . mysqli_error($link);
    echo json_encode(['error'=>'false to login']);
}