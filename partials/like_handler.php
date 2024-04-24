<?php
require 'db_connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
     if(isset($_SESSION['logged_user_id'])){
          $user_id = $_SESSION['logged_user_id'];
          if(isset($_POST['post_id'])){
               $post_id = $_POST['post_id'];
               
               $sql_liked="SELECT * FROM `like_table` WHERE `post_id`=$post_id AND `petuser_id`=$user_id";
               $result_liked=mysqli_query($connection,$sql_liked);
               $num_liked=mysqli_num_rows($result_liked);
               $liked = $num_liked > 0 ? true : false;
               $like_status;
               if($liked){
                    $sql = "DELETE FROM `like_table` WHERE `like_table`.`post_id` = $post_id AND `petuser_id` = $user_id";
                    $result = mysqli_query($connection,$sql);
                    $like_status = 0;
               }
               else{
                    $sql = "INSERT INTO `like_table` (`post_id`, `petuser_id`) VALUES ('$post_id', '$user_id')";

                    $result = mysqli_query($connection,$sql);
                    $like_status = 1;
               }

               $sql_like_status="SELECT * FROM `like_table` WHERE `post_id`=$post_id";
               $like_result_status=mysqli_query($connection,$sql_like_status);
               $num = mysqli_num_rows($like_result_status);
               echo $num .','. $like_status;
          }

     }
}
?>