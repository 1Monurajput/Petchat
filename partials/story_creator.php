<?php
require 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $filename =$_FILES['story']['name'];
    $tempname = $_FILES['story']['tmp_name'];
    $folder = "./images/".$filename;
    $logged_user_id=$_SESSION['logged_user_id'];
    
    if(strlen($filename)>5){
        if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
            $sql = "INSERT INTO `story` (`petuser_id`, `image`) VALUES ('3', '$filename')";
            $result=mysqli_query($connection,$sql);
            if(move_uploaded_file($tempname, $folder)) {
               echo "done";
            } 
            else{
                echo "<h3>  Failed to upload image!</h3>";
            }

        }
        else{
            $_SESSION['login_alert'] = true;
        }
    }
    else{
        echo "failed to upload story".mysqli_error();
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
?>