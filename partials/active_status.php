<?php
require 'db_connect.php';
date_default_timezone_set('Asia/Kolkata');
?>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $status_id = $_POST['status_id'];
    $sql = "SELECT * FROM `active_status` WHERE `petuser_id` = $status_id";
    $result = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($result);
    if($num){
        $rows= mysqli_fetch_assoc($result);
        $time =  $rows['time'];
        $status = $rows['status'];
        if($status == "offline"){
            echo "0";
        }
        else{
            $current_time = time();
            $time = strtotime($time) + (1*60);
            if($current_time <= $time){
                echo "1";
            }
            else{
                $sql_status = "UPDATE `active_status` SET `status` = 'offline' WHERE `active_status`.`petuser_id` = $status_id";
                $result_status = mysqli_query($connection,$sql_status);
                echo "0";
            }
        }
    }
    else{
        echo "offline";
    }
}
?>