<?php
require 'db_connect.php';
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $logged_user_id = $_POST['logged_user_id'];
    $sql = "SELECT * FROM `active_status` WHERE `petuser_id` = $logged_user_id";
    $result = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($result);
    if($num){
        $sql_status = "UPDATE `active_status` SET `time` = CURRENT_TIMESTAMP(), `status` = 'online' WHERE `active_status`.`petuser_id` = $logged_user_id";
        $result_status = mysqli_query($connection,$sql_status);
        echo "time_done";
    }
    else{
        $sql = "INSERT INTO `active_status` (`petuser_id`, `status`) VALUES ('$logged_user_id', 'active')";
        $result = mysqli_query($connection,$sql);
        echo "id_created";
    }
}
?>