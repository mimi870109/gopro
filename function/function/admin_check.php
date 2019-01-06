<?php
$admin_sql = "SELECT * FROM `permission_check` WHERE `email`='$Username' AND `permission`=1";
$result = mysqli_query($link, $admin_sql);
$result_count = $result -> num_rows;
if($result_count !== 0){
    echo '<li><a href="check_file.php">審核項目</a></li>';
}
else{

}
?>