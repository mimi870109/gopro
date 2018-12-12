<?php
include ('../login/Mysql_check.php');
include ('./save_session.php');
$Tile = $_POST['Tile'];
$Introduce = $_POST['Introduce'];
$Sell_Price = $_POST['Sell_Price'];
$Username = $_SESSION['username'];
$File_Path = '';

# 取得上傳檔案數量
$fileCount = count($_FILES['my_file']['name']);

$success = null;
if($Username == null){
    $output = ['error'=>'請先登陸'];
   // echo "請先進行登陸". '<br>';
}
else{
    for ($i = 0; $i < $fileCount; $i++) {
        if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK) # 檢查檔案是否上傳成功
        {
            $ext = explode('.', basename($_FILES['my_file']['name'][$i])); //将文件名按 “.” 分割成数组
            $MD5_FILE_nAME =  md5(uniqid()) . "." . array_pop($ext);
            if (file_exists('../upload/' . $MD5_FILE_nAME))  # 檢查檔案是否已經存在
            {
                $success = true;
             //   echo '檔案已存在。<br/>';
            }
            else {
                $file = $_FILES['my_file']['tmp_name'][$i];
                $dest = '../upload/' . $MD5_FILE_nAME;
                $File_Path = './upload/' . $MD5_FILE_nAME;
                move_uploaded_file($file, $dest); # 將檔案移至指定位置
            }
            $success = true;
          //  echo  '<script> alert("檔案上傳成功"); </script>';
        }
        else {
            $success = false;
        }
    }
    $Insert_Sql_Info = "INSERT INTO `check_sell_item`(`email`,`title`, `description`, `file_path`, `price`) VALUES ('$Username','$Tile','$Introduce','$File_Path','$Sell_Price')";
    if (mysqli_query($link, $Insert_Sql_Info)) {
        $output = ['success'=>'上傳成功']; // 成功的處理
    }
    else {
        $output = ['error'=>'上傳失敗']; // 失敗的處理
    }
}
echo json_encode($output); // 返回json
?>