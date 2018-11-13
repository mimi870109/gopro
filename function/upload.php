<?php
# 取得上傳檔案數量
$fileCount = count($_FILES['my_file']['name']);
for ($i = 0; $i < $fileCount; $i++) {

    if ($_FILES['my_file']['error'][$i] === UPLOAD_ERR_OK) # 檢查檔案是否上傳成功
    {
        echo '檔案名稱: ' . $_FILES['my_file']['name'][$i] . '<br/>';
        echo '檔案類型: ' . $_FILES['my_file']['type'][$i] . '<br/>';
        echo '檔案大小: ' . sprintf("%.2f",($_FILES['my_file']['size'][$i] / (1024*1024)) ). ' MB<br/>';
            if (file_exists('../upload/' . $_FILES['my_file']['name'][$i]))  # 檢查檔案是否已經存在
            {
                echo '檔案已存在。<br/>';
            }
            else {
                $file = $_FILES['my_file']['tmp_name'][$i];
                $dest = '../upload/' . $_FILES['my_file']['name'][$i];
                # 將檔案移至指定位置
                move_uploaded_file($file, $dest);
            }
       echo  '<script> alert("檔案上傳成功"); </script>';
    }
    else {
        echo '錯誤代碼：' . $_FILES['my_file']['error'] . '<br/>';
    }
}
?>