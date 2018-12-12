<?php
include('./Mysql_check.php');
include ('./save_session.php');
$Tile = $_POST['Tile'];
$Introduce = $_POST['Introduce'];
$Sell_Price = $_POST['Sell_Price'];
$Username = $_SESSION['username'];
$File_Path = '';
class Json_Output{
    public $success = "";
    public $error = "";
}
$Json_Output = new Json_Output();
$fileCount = count($_FILES['my_file']['name']); # 取得上傳檔案數量
$success = null;
if($Username == null){
    $success = false;
    $output = ['error'=>'請先登陸'];
}
else{
    for ($i = 0; $i < $fileCount; $i++) {
        if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK) # 檢查檔案是否上傳成功
        {
            $ext = explode('.', basename($_FILES['my_file']['name'][$i])); //将文件名按 “.” 分割成数组
            $MD5_FILE_nAME =  md5(uniqid()) . "." . array_pop($ext);
            if (file_exists('../upload/' . $MD5_FILE_nAME))  # 檢查檔案是否已經存在
            {
                $success = false;
                $Json_Output ->error = "上傳失敗,檔案已存在";
            }
            else {
                $file = $_FILES['my_file']['tmp_name'][$i];
                $dest = '../upload/' . $MD5_FILE_nAME;
                $File_Path = './upload/' . $MD5_FILE_nAME;
                move_uploaded_file($file, $dest); # 將檔案移至指定位置
                $Insert_Sql_Info = "INSERT INTO `check_sell_item`(`email`,`title`, `description`, `file_path`, `price`) VALUES ('$Username','$Tile','$Introduce','$File_Path','$Sell_Price')";
                if (mysqli_query($link, $Insert_Sql_Info)) {
                    $success = true;
                    $Json_Output ->success = "上傳成功";
                }
                else {
                    $success = false;
                    $Json_Output ->error = "連接資料庫失敗";
                }
            }
        }
        else {
            $success = false;
        }
    }
}
echo json_encode($Json_Output); // 返回json
?>