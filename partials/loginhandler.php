<?php
require 'db_connect.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user = $_POST["username"];
    $user = str_replace("<","&lt;",$user);
    $user = str_replace(">","&gt;",$user);
    $pass = $_POST["pass"];
    $sql = "SELECT * FROM `petuser` WHERE `petuser_name` = '$user'";
    $result = mysqli_query($connection,$sql);
    $usernum=mysqli_num_rows($result);
    if($usernum==1){
        $rows=mysqli_fetch_assoc($result);
        if(password_verify($pass,$rows['password'])){
            $_SESSION['login_success']=true;
            $_SESSION['login_alert_success']=true;
            $_SESSION['logged_user_id'] = $rows['petuser_id'];
            if($rows['admin'] == "YES"){
                $_SESSION['admin']=true;
            }
            if(strlen($rows['image']>3)){
                $_SESSION['logged_user_dp'] = $rows['image'];
            }
            else{
                $_SESSION['logged_user_dp'] = 'user.png';
            }
            if($rows['name']>0){
                $_SESSION['logged_user_name'] = $rows['name'];
            }
            else{
                $_SESSION['logged_user_name'] ="@".$rows['petuser_name'];
            }
            header("location:/petchat/home.php");
        }
        else{
            $_SESSION['login_pass']=true;
            header("location:{$_SERVER['HTTP_REFERER']}");
        }
    }
    else{
        $_SESSION['login_user_not_found']=true;
        header("location:{$_SERVER['HTTP_REFERER']}");
    }
    

}
?>