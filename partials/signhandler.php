<?php
require 'db_connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["username"];
    $user = str_replace("<","&lt;",$user);
    $user = str_replace(">","&gt;",$user);
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $sql = "SELECT * FROM `petuser` WHERE `petuser_mail` = '$email'";
    $result = mysqli_query($connection,$sql);
    $emailnum=mysqli_num_rows($result);
    if($emailnum==0){
        $sql = "SELECT * FROM `petuser` WHERE `petuser_name` = '$user'";
        $result = mysqli_query($connection,$sql);
        $usernum=mysqli_num_rows($result);
        if($usernum==0){
            if($pass == $cpass){
                $hash = password_hash($pass,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `petuser` (`petuser_name`, `petuser_mail`, `password`, `image`) VALUES ('$user', '$email', '$hash', '')";
                $result = mysqli_query($connection,$sql);
                if($result){
                    $_SESSION['sign_success']=true;
                }
            }
            else{
                $_SESSION['sign_pass']=true;
            }
        }
        else{
            $_SESSION['sign_user']=true;
        }
    }
    else{
        $_SESSION['sign_email']=true;
    }
    header("location:{$_SERVER['HTTP_REFERER']}");

}
?>