<?php
require 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $text = $_POST['text'];
    $text = str_replace("<","&lt;",$text);
    $text = str_replace(">","&gt;",$text);
    $filename =$_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "./images/".$filename;
    $_SESSION['login_alert'] = false;
    $_SESSION['image_alert'] = false;
    $_SESSION['upload_success'] = false;
    $logged_user_id=$_SESSION['logged_user_id'];
    
    if(strlen($filename)>5 || strlen($text) >0){
        if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
            $sql = "INSERT INTO `post` (`image`, `text`, `petuser_id`) VALUES ('$filename', '$text', '$logged_user_id');";
            $sql2 = "INSERT INTO `photos` (`petuser_id`, `photo`) VALUES ('$logged_user_id', '$filename')";
            $result = mysqli_query($connection,$sql);
            $result2 = mysqli_query($connection,$sql2);
            if(move_uploaded_file($tempname, $folder)) {
                $_SESSION['upload_success'] = true;
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
        $_SESSION['image_alert']=true;
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
?>