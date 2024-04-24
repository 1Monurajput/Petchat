<?php
require 'db_connect.php';
if(isset($_POST['post_id'])){
    $post_id = $_POST['post_id'];
    $sql = "DELETE FROM `post` WHERE `post`.`post_id` = $post_id";
    $result=mysqli_query($connection,$sql);
    $status = 1;
    echo $status;
}
?>