<?php
require 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(isset($_FILES['cvrphoto'])){
        $filename=$_FILES['cvrphoto']['name'];
        $tempname=$_FILES['cvrphoto']['tmp_name'];
        $folder="./images/".$filename;

        if(strlen($filename)>5){
            if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
                $logged_user_id=$_SESSION['logged_user_id'];
                $sql="UPDATE `petuser` SET `Cover_photo` = '$filename' WHERE `petuser`.`petuser_id` = $logged_user_id";
                $result=mysqli_query($connection,$sql);
                if(move_uploaded_file($tempname,$folder)){

                }
            }
            
        }
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
    if(isset($_FILES['dp_photo'])){
        $filename=$_FILES['dp_photo']['name'];
        $tempname=$_FILES['dp_photo']['tmp_name'];
        $folder="./images/".$filename;

        if(strlen($filename)>5){
            if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
                $logged_user_id=$_SESSION['logged_user_id'];
                $sql="UPDATE `petuser` SET `image` = '$filename' WHERE `petuser`.`petuser_id` = $logged_user_id";
                $result=mysqli_query($connection,$sql);
                if(move_uploaded_file($tempname,$folder)){

                }
            }
            
        }
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
    
    if(isset($_POST['bio'])){
        $filename=$_POST['bio'];
        $filename = str_replace("<","&lt;",$filename);
        $filename = str_replace(">","&gt;",$filename);
        if(strlen($filename)>1){
            if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
                $logged_user_id=$_SESSION['logged_user_id'];
                $sql="UPDATE `petuser` SET `bio` = '$filename' WHERE `petuser`.`petuser_id` = $logged_user_id";
                $result=mysqli_query($connection,$sql);
            }
            
        }
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }

    if(isset($_POST['username'])){
        $filename=$_POST['username'];
        $filename = str_replace("<","&lt;",$filename);
        $filename = str_replace(">","&gt;",$filename);
        if(strlen($filename)>1){
            if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
                $logged_user_id=$_SESSION['logged_user_id'];
                $sql="UPDATE `petuser` SET `name` = '$filename' WHERE `petuser`.`petuser_id` = $logged_user_id";
                $result=mysqli_query($connection,$sql);
            }
            
        }
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    }
}



?>