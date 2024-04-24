<?php
require 'db_connect.php';
?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['accept'])){
        $profile = $_POST['profile'];
        $user_id = $_POST['user'];
        $sql = "UPDATE `friends` SET `status` = 'friends' WHERE `friends`.`frnd_id` = $profile AND `petuser_id`=$user_id";
        $sql2 = "UPDATE `friends` SET `status` = 'friends' WHERE `friends`.`frnd_id` = $user_id AND `petuser_id`=$profile";
        $result= mysqli_query($connection,$sql);
        $result2= mysqli_query($connection,$sql2);
        echo"done";
    }
    else if(isset($_POST['reject'])){
        $profile = $_POST['profile'];
        $user_id = $_POST['user'];
        $sql = "DELETE FROM `friends` WHERE `friends`.`frnd_id` = $profile AND `petuser_id`=$user_id";
        $sql2 = "UPDATE `friends` SET `status` = 'friends' WHERE `friends`.`frnd_id` = $user_id AND `petuser_id`=$profile";
        $result= mysqli_query($connection,$sql);
        $result2= mysqli_query($connection,$sql2);

        echo"done";
    }
    else if(isset($_POST['request'])){
        $profile = $_POST['profile'];
        $user_id = $_POST['user'];
        $check = "SELECT * FROM `friends` WHERE `petuser_id`=$profile AND `frnd_id` =$user_id";
        $check_res = mysqli_query($connection,$check);
        $num = mysqli_num_rows($check_res);
        if($num == 0){
            $sql = "INSERT INTO `friends` (`petuser_id`, `frnd_id`, `status`) VALUES ('$profile', '$user_id', 'pending')";
            $sql2 = "INSERT INTO `friends` (`petuser_id`, `frnd_id`, `status`) VALUES ('$user_id', '$profile', 'send')";
            $result= mysqli_query($connection,$sql);
            $result2= mysqli_query($connection,$sql2);
            echo "done";
        }


        
        
    }
}
?>