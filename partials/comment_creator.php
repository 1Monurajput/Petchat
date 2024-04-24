<?php
require 'db_connect.php';
$post_id=$_GET['post_id'];
if($_SERVER['REQUEST_METHOD']=="POST"){
    $comment = $_POST['comm_text'];
    $comment_xss = str_replace("<","&lt;",$comment);
    $comment_xss = str_replace(">","&gt;",$comment_xss);
    if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
        $logged_user_id=$_SESSION['logged_user_id'];
        if(strlen($comment)>0){
        $sql="INSERT INTO `comments` (`comment_discription`, `post_id`, `petuser_id`) VALUES ('$comment_xss', '$post_id','$logged_user_id')";
        $result=mysqli_query($connection,$sql);
        if($result){
            
        }
    }
    else{
        
    }
    }
    else{
        $_SESSION['login_alert'] = true;
    }
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit();
}
?>