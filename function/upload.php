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

if($Username == null){
    echo "請先進行登陸". '<br>';
  //  echo "即將跳轉至登陸頁面". '<br>';
  //  echo'<meta http-equiv="refresh" content="1.5;url=http://210.70.80.21/~s105035041/gopro/login/login.php" />';
}
else{
    for ($i = 0; $i < $fileCount; $i++) {
        if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK) # 檢查檔案是否上傳成功
        {
            echo '檔案名稱: ' . $_FILES['my_file']['name'][$i] . '<br>';
            echo '檔案類型: ' . $_FILES['my_file']['type'][$i] . '<br>';
            echo '檔案大小: ' . sprintf("%.2f",($_FILES['my_file']['size'][$i] / (1024*1024)) ). ' MB<br>';
            if (file_exists('../upload/' . $_FILES['my_file']['name'][$i]))  # 檢查檔案是否已經存在
            {
                echo '檔案已存在。<br/>';
            }
            else {
                $file = $_FILES['my_file']['tmp_name'][$i];
                $dest = '../upload/' . $_FILES['my_file']['name'][$i];
                $File_Path = './upload/' . $_FILES['my_file']['name'][$i];
                # 將檔案移至指定位置
                move_uploaded_file($file, $dest);
            }
            echo  '<script> alert("檔案上傳成功"); </script>';
        }
        else {
            echo '錯誤代碼：' . $_FILES['my_file']['error'] . '<br>';
        }
    }
    $Insert_Sql_Info = "INSERT INTO `check_sell_item`(`email`,`title`, `description`, `file_path`, `price`) VALUES ('$Username','$Tile','$Introduce','$File_Path','$Sell_Price')";
    if (mysqli_query($link, $Insert_Sql_Info)) {
        echo "新增資料成功". "<br>";
    }
    else {
        echo "Error: " . $Insert_Sql_Info . "<br>" . mysqli_error($link);
    }
}
?>