<?php
require 'partials/db_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1250">
    <title>Petchat-home</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
        font-family: "Roboto Slab", serif;
        font-family: "Roboto Slab", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }

    .coverphoto {
        height: 16rem;
        width: 100%;
    }

    .coverphoto img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        object-position: center;
    }

    .profile_circle {
        height: 13.5em;
        width: 13.5em;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
        border-radius: 50%;
        border: 4px solid orangered;
        overflow: hidden;
        margin: 0 auto;
        margin-top: -9%;
    }

    .profile_circle img {
        height: 12rem;
        width: 12rem;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
    }

    .title-text {
        text-align: center;
        margin-top: .8rem;
    }

    .title-text h3 {
        font-weight: 700;
    }

    .title-text p {
        color: gray;
    }

    .buttons {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-top: .8rem;
        margin-bottom: 2rem;
    }

    .profile-cards {

        margin-top: 1rem;
        margin-bottom: 2rem;
        flex-direction: row;
    }

    .profile-cards .container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 2rem;
    }

    .profile-cards .card {
        height: 200px;
        width: 200px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 20px;
        display: flex;
        justify-content: end;
        align-items: center;
        padding: 10px 10px;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        margin: 4px 0;
    }

    .post_page {
        width: 100%;
        display: flex;
        padding: 3rem 5rem;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding-top: 100px;
    }

    .post_card {
        margin-bottom: 50px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    a {
        text-decoration: none;
    }

    .post_text {
        width: 100%;
        padding-top: 70px;
        padding-left: 60px;
        padding-bottom: 30px;
        padding-right: 100px;
    }

    .post_text h5 {
        color: black;
        font-weight: normal;
        font-size: 1rem;
    }

    .post_card img {
        height: 350px;
        width: 100%;
        object-fit: contain;
    }

    .post_container {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .user {
        width: fit-content;
        display: flex;
        gap: 7px;
        padding: 5px;
        align-items: center;
        position: absolute;
        left: 5px;
        color: orangered;
    }

    .circle {
        border: 2px solid rgb(220, 53, 69);
        border-radius: 50%;
        height: 45px;
        width: 45px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .user img {
        height: 35px;
        width: 35px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
    }

    .username {
        display: flex;
        flex-direction: column;
        padding-top: 25px;
    }

    .username h5 {
        margin: 0;
        line-height: 8px;
    }

    .user_undername {
        text-decoration: underline;
        font-size: .8em;
        color: gray;
    }

    .user_undername:hover {
        color: orangered;
    }

    .post_butt {
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        cursor: pointer;
        gap: 15px;
        border-bottom: 2px solid rgb(178, 178, 178);
        border-top: 2px solid rgb(178, 178, 178);
        padding: 5px 8rem;
        margin: 1rem 0rem;

    }

    .post_butt span {
        font-size: 1.2rem;
        font-weight: 400;
    }

    .label {
        margin: 1rem;
        padding: 2px;
        width: fit-content;
        position: absolute;
    }

    .upload {
        padding: 8px 10px;
        width: 89%;
        margin-bottom: 50px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
    }

    .upload #uploadfile {
        width: 90%;
    }

    .comm label {
        width: 100%;
        padding: 4px 8px;
        border-radius: 5px;
        color: white;
    }

    .divider {
        border: 1px solid gray;
        margin-bottom: 10px;
        margin-right: 5rem;
        margin-left: 5rem;
    }

    .comm {
        border: 1.5px solid orangered;
        padding: 10px 10px;
        width: 100%;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        border-radius: 5px;
    }

    .comm_text {
        width: 80%;
        border-radius: 10px;
        padding: 6px 15px;
        border-color: gray;
        border-width: 1px;
    }

    .upload-post {
        width: 100%;
        display: flex;
        gap: 1rem;
        padding: 1rem .5rem;
        margin-left: 2.5rem;

    }

    .upload-dp img {
        height: 40px;
        width: 40px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
    }

    .upload-button {
        width: 80%;
    }

    .upload-button button {
        width: 100%;
        height: 100%;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        overflow: hidden;
        border-radius: 10px;
        border: none;
        padding: 4px 10px;
        color: gray;
    }

    .upload-button button:active {
        outline: none;
        border-style: outset;
    }

    .upload-label h5 {
        font-size: 1.3rem;
        font-weight: normal;
    }

    .post_text_area {
        width: 100%;
        resize: none;
        border: none;
        padding: 5px 2px;
        margin-top: 4px;
        margin-bottom: 5px;
        outline: none;
        word-wrap: break-word;
        overflow: hidden;
    }

    .post_page input[type="file"] {
        display: none;
    }

    .image-label {
        width: 100%;
        height: 10rem;
        border: 2px solid rgb(210, 210, 210);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-weight: normal;
        color: gray;
        border-radius: 15px;
    }

    .profile_username {
        margin-top: -8px;
    }

    .bio {
        width: 40%;
        word-wrap: break-word;
    }

    .camera_button:hover {
        color: orangered;
    }

    .friend-card {
        min-height: 100px;
        max-height: 350px;
        width: 100%;
        border-radius: 20px;
        padding: 10px;
        overflow: auto;
    }

    .friend-card-wrapper {
        padding: 10px;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 15px;
        padding-bottom: 5px;
    }

    .friend-requests {
        border-top: 2px solid rgb(207, 207, 207);
        padding: 5px 0;

    }

    .frnd-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .deco {
        text-align: right;
        margin-top: -15px;
        margin-right: 10px;
    }

    .friend-card::-webkit-scrollbar {
        display: none;
    }

    .friend-card-wrapper img {
        height: 50px;
        width: 50px;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
    }

    .all_img_box {
        width: 100%;
        display: grid;
        padding: 10px 20px;
        max-height: 400px;
        overflow: auto;
        place-items: center;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .all_img_box::-webkit-scrollbar {
        display: none;
    }

    .all_img_box .card {
        width: 100%;
        height: 250px;
        padding: 0;
        overflow: hidden;
    }

    .all_img_box .card img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        border-radius: 15px;
    }
    </style>
</head>

<body>
    <?php
    include 'partials/nav.php';
    $logged_user_id;
    $real= false;
    if(isset($_SESSION['logged_user_id'])){
        $logged_user_id=$_SESSION['logged_user_id'];
    }
    if(isset($_GET['petuser_id'])){
        $petuser_id=$_GET['petuser_id'];
        if($logged_user_id == $petuser_id){
            $real = true;
        }
        $logged_user_id=$petuser_id;
        
    }
    $sql = "SELECT * FROM `petuser` WHERE `petuser_id`='$logged_user_id'";
    $result = mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>

    <!-- coverphoto Modal -->
    <div class="modal fade" id="coverphoto" tabindex="-1" aria-labelledby="coverphotoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="coverphotoLabel">Cover-photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/petchat/partials/profilehandler.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" name="cvrphoto" class="form-control" id="uploadfile" accept="image/*">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-outline-danger">Upload</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- dp change modal -->
    <div class="modal fade" id="dp_photo" tabindex="-1" aria-labelledby="dp_photoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="dp_photoLabel">Change profile photo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/petchat/partials/profilehandler.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" name="dp_photo" class="form-control" id="uploadfile" accept="image/*">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-outline-danger">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- name change modal -->
    <div class="modal fade" id="namechanger" tabindex="-1" aria-labelledby="namechangerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="namechangerLabel">Change your name</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/petchat/partials/profilehandler.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="uploadfile"
                                placeholder="Enter Your Name" maxlength="20">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-outline-danger">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- bio change modal -->
    <div class="modal fade" id="bio" tabindex="-1" aria-labelledby="bioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="bioLabel">Change Bio</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/petchat/partials/profilehandler.php" method="post">
                        <div class="mb-3">
                            <input type="text" name="bio" class="form-control" id="uploadfile"
                                placeholder="Enter Your Bio" maxlength="92">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-outline-danger">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="coverphoto position-relative" style="padding-top: 70px;">
        <img src="partials/images/<?php echo $row['Cover_photo'];?>" alt="Cover photo">
        <?php
        if($real){
            echo '<button type="button" class="btn z-2 position-absolute bottom-0 end-0 camera_button" style="margin-right:2rem;"
            data-bs-toggle="modal" data-bs-target="#coverphoto"><span class="material-symbols-outlined">
                add_a_photo
            </span>
        </button>';
        }
        ?>
    </div>
    <div class="profilephoto position-relative">
        <div class="profile_circle">
            <?php
            if(!empty($row['image'])){
                $_SESSION['dp_image'] = $row['image'];
                echo '<img src="partials/images/'.$row['image'].'" alt="">';
            }
            else{
                echo '<img src="partials/images/user.png" alt="">';
            }
            ?>
        </div>
        <div class="title-text d-flex justify-content-center align-items-center flex-column">
            <h3><?php 
                if(!empty($row['name'])){
                    echo $row['name'];
                }
                else{
                    echo "A petchat user";
                }
                ?>
            </h3>
            <p class="profile_username">~<?php echo $row['petuser_name']; ?></p>
            <p class="bio text-center">
                <?php 
                if(!empty($row['bio'])){
                    echo $row['bio'];
                }
                ?>
            </p>
        </div>
        <!-- <div class="container">
            <input type="hidden" class="send-request">
        </div> -->
        <?php
            if (!$real) {
                echo '<div class="buttons">
                <button type="button" class="btn btn-outline-primary send-request" data-profile="' . $logged_user_id . '" data-id="' . $_SESSION['logged_user_id'] . '">Add + </button>
                <button type="button" class="btn btn-outline-primary">Follow -></button>
                </div>';
            }
        ?>
        <?php if($real){
            echo '<div class="dropdown profile_edit position-absolute" style="top: 35%;right:5%;">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menu
            </button>
            <ul class="dropdown-menu dropdown-menu-white">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#dp_photo">Change Photo</a>
                </li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#namechanger">Edit name</a>
                </li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bio">Edit Bio</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="http://localhost/petchat/partials/logouthandler.php">Log_out</a></li>
            </ul>
        </div>';
            }
        ?>
    </div>
    <div class="profile-cards">


        <!--  friend Modal -->
        <div class="modal fade" id="friendmodal" tabindex="-1" aria-labelledby="friendmodalLabel" aria-hidden="true"
            style="left:58%; top:10%;width: 35%;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="friendmodalLabel">Friends</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="friend-card">
                            <?php
                                    $sql = "SELECT * FROM `friends` WHERE `petuser_id` = $logged_user_id AND `status`='friends'";
                                    $result= mysqli_query($connection,$sql);
                                    while($rows=mysqli_fetch_assoc($result)){
                                        $frnd_id = $rows['frnd_id'];
                                        $srn = $rows['Srn'];
                                        $sql_frnd = "SELECT * FROM `petuser` WHERE `petuser_id` = $frnd_id";
                                        $sql_result=mysqli_query($connection,$sql_frnd);
                                        $sql_rows = mysqli_fetch_assoc($sql_result);
                                        $dp = $sql_rows['image'];
                                        $name = $sql_rows['name'];
                                        if(strlen($dp<3)){
                                            $dp = "user.png";
                                        }
                                        if(strlen($name)<1){
                                            $name = "@".$sql_rows['petuser_name'];
                                        }
                                        echo'<div class="friend-card-wrapper" data-profile="' . $frnd_id . '" data-id="' . $petuser_id . '">
                                            <div class="frnd-info">
                                                <img src="partials/images/'.$dp.'" alt="friend_image">
                                                <h5>'.$name.'</h5>
                                            </div>
                                            <div class="deco">';
                                            if($real){
                                                echo '<button class="btn btn-outline-danger frnd-dec">Unfriend</button>';
                                            }
                                            else{
                                                echo'❤️';
                                            }
                                                
                                            echo '</div>
                                        </div>';
                                    }
                                ?>
                            <div class="friend-requests">

                                <?php
                                    $sql = "SELECT * FROM `friends` WHERE `petuser_id` = $logged_user_id AND `status`='pending'";
                                    $result= mysqli_query($connection,$sql);
                                    while($rows=mysqli_fetch_assoc($result)){
                                        $frnd_id = $rows['frnd_id'];
                                        $srn = $rows['Srn'];
                                        $sql_frnd = "SELECT * FROM `petuser` WHERE `petuser_id` = $frnd_id";
                                        $sql_result=mysqli_query($connection,$sql_frnd);
                                        $sql_rows = mysqli_fetch_assoc($sql_result);
                                        $dp = $sql_rows['image'];
                                        $name = $sql_rows['name'];
                                        if(strlen($dp<3)){
                                            $dp = "user.png";
                                        }
                                        if(strlen($name)<1){
                                            $name = "@".$sql_rows['petuser_name'];
                                        }
                                        if($real){
                                            echo'<h5>Friend requests</h5><div class="friend-card-wrapper" data-profile="' . $frnd_id . '" data-id="' . $petuser_id . '">
                                            <div class="frnd-info">
                                                <img src="partials/images/'.$dp.'" alt="friend_image">
                                                <h5>'.$name.'</h5>
                                            </div>
                                            <div class="deco">
                                                <button class="btn btn-outline-danger frnd-dec">Decline</button>
                                                <button class="btn btn-outline-success frnd-accept">Accept</button>
                                            </div>
                                        </div>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- photo Modal -->
        <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="photoModalLabel">Photos</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="all_img_box">

                                <?php
                        $sql = "SELECT * FROM `photos` WHERE `petuser_id`=$logged_user_id";
                        $result = mysqli_query($connection,$sql);
                        while($photo=mysqli_fetch_assoc($result)){
                            $image = $photo['photo'];
                            echo'<div class="card"><img src="partials/images/'.$image.'" alt="img"></div>';
                        }
                        ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card"
                style="background-image: url(partials/images/Premium\ Vector\ _\ Love\ hand\ sign\,\ finger\ heart\ vector\ drawing.jpg);">
                <div class="card-text">
                    <h5 class="fs-4">Likes</h5>
                </div>
            </div>
            <div class="card " data-bs-toggle="modal" data-bs-target="#friendmodal"
                style="background-image: url(partials/images/Handshake\ Clipart\ Pictures.jpg); ">
                <div class="card-text">
                    <h5 class="fs-4">Friends</h5>
                </div>
            </div>
            <div class="card" style="background-image: url(partials/images/WhatsApp\ icon\ in\ iOS\ Style.jpg);"
                data-bs-toggle="modal" data-bs-target="#photoModal">
                <div class="card-text ">
                    <h5 class="fs-4">Photos</h5>
                </div>
            </div>
        </div>

    </div>
    <div class="profile_divider bg-primary text-light p-1">
        <h5 class="mx-5"><i>Posts</i></h5>
    </div>
    <?php
    
    $login_alert=false;
    $image_alert=false;
    $upload_success=false;
    
    if(isset($_SESSION['image_alert']) && $_SESSION['image_alert']==true){
        $image_alert=true;
        $_SESSION['image_alert']=false;
    }

    if(isset($_SESSION['login_alert']) && $_SESSION['login_alert']==true){
        $login_alert=true;
        $_SESSION['login_alert']=false;
    }

    if(isset($_SESSION['upload_success']) && $_SESSION['upload_success']==true){
        $upload_success=true;
        $_SESSION['upload_success']=false;
    }

    ?>
    <div class="container post_page">
        <div class="container w-50">
            <!-- Modal -->
            <div class="modal fade" id="post_upload_modal" tabindex="-1" aria-labelledby="post_upload_modalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-center" id="post_upload_modalLabel">Create post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/petchat/partials/post_creator.php" method="post"
                                enctype="multipart/form-data">
                                <div class="mb-3 d-flex align-items-center">
                                    <div class="upload-dp me-2">
                                        <img src="partials/images/<?php echo $_SESSION['logged_user_dp'];?>" alt="dp">
                                    </div>
                                    <h5 class="mt-2 fs-6">
                                        <?php echo $_SESSION['logged_user_name'];?></h5>
                                </div>
                                <div class="form-floating">
                                    <textarea class="post_text_area" name="text" id="floatingTextarea"
                                        placeholder="Write your thoughts!!" oninput="autoReSize(this)"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="post-img-upload" class="image-label">
                                        <h6>Select image</h6>
                                        <span class="material-symbols-outlined fs-1">
                                            photo_camera
                                        </span>
                                        <span class="text-primary" id="image-name">

                                        </span>
                                    </label>
                                    <input type="file" class="form-control" id="post-img-upload" name="uploadfile">
                                </div>
                                <div class="divider w-100"
                                    style="border-bottom: 1px solid rgb(192, 192, 192);margin-left:0px; margin-right: 0px;">
                                </div>
                                <button type="submit" class="btn  w-100 btn-outline-danger mb-2 fs-5">Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="upload">
            <?php
            if($upload_success==true){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>POSTED!!</strong> You successfully shared your memory/thought around the world🌍.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            $upload_success = false;
            }
            else if($image_alert==true){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sorry not posted!!</strong> A blank post can not be posted🙁.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            $image_alert=false;
            }
            ?>
            <div class="upload-label">
                <h5>Hey, <?php echo $_SESSION['logged_user_name'];?> whats going on?</h5>
            </div>
            <div class="upload-post">
                <div class="upload-dp">
                    <img src="partials/images/<?php echo $_SESSION['logged_user_dp'];?>" alt="dp">
                </div>
                <div class="upload-button">
                    <button type="button" class="text-start" data-bs-toggle="modal"
                        data-bs-target="#post_upload_modal">Share your memory with
                        us!</button>
                </div>
            </div>
        </div>
        <?php
        $sql = "SELECT * FROM `post` WHERE `petuser_id` = $logged_user_id ORDER BY `time` DESC";
        $result = mysqli_query($connection,$sql);
        
        while($rows=mysqli_fetch_assoc($result)){
            $post_id=$rows['post_id'];
            $post_img = $rows['image'];
            $post_text = $rows['text'];


            $petuser_id = $rows['petuser_id'];
            $user_sql= "SELECT * FROM `petuser` WHERE `petuser_id`=$petuser_id";
            $user_result = mysqli_query($connection,$user_sql);
            $user_row=mysqli_fetch_assoc($user_result);


            $sql_like_status="SELECT * FROM `like_table` WHERE `post_id`=$post_id";
            $like_result_status=mysqli_query($connection,$sql_like_status);
            $num = mysqli_num_rows($like_result_status);

            $sql_liked="SELECT * FROM `like_table` WHERE `post_id`=$post_id AND `petuser_id`=$logged_user_id";
            $result_liked=mysqli_query($connection,$sql_liked);
            $num_liked=mysqli_num_rows($result_liked);
            $liked = $num_liked > 0 ? true : false;
            echo '<div class="card post_card" style="width: 85%;" data-id="'.$post_id.'">
            <a href="postcontent.php?post_id='.$post_id.'">
                <div class="post_container">
                    <div class="post_text">
                        <h5>'.$post_text.'</h5>
                    </div>';
                    
                    if(strlen($post_img)>3){
                        echo'<img src="partials/images/'.$rows['image'].'"
                        class="card-img-top" alt="...">';
                    }
                    echo'
                </div>
            </a>
            
            <div class="user">
                <a href="/petchat/profile.php?petuser_id='.$petuser_id.'">
                <div class="circle">
                ';
                if(!empty($user_row['image'])){
                    echo '<img src="partials/images/'.$user_row['image'].'" alt="">';
                }
                else{
                    echo '<img src="partials/images/user.png" alt="">';
                }
                echo'
                </div>
                </a>
                <div class="username">
                    <h5>'.$user_row['name'].'</h5>
                    <p class = "user_undername">@'.$user_row['petuser_name'].'</p>
                </div>
            </div>
            <div class="post_butt">
                <div class="like_container d-flex align-items-center like">
                
                    <span class="material-symbols-outlined '.($liked ? ' text-danger' : '').' fs-2">
                        favorite
                    </span>
                    <span class="display_like" style="margin-left: 5px;">'.$num.'</span>
                    <span style="margin-left: 2px;">Like</span>

                </div>
                <a class="btn d-flex align-items-center" data-bs-toggle="collapse" href="#collapseExample'.$post_id.'" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    <span class="material-symbols-outlined fs-2">
                        comment
                    </span>
                    <span style="margin-left: 5px;">Comment</span>
                </a>
                <div class="share_container d-flex align-items-center">
                
                    <span class="material-symbols-outlined fs-2">
                        share
                        </span>
                    <span style="margin-left: 5px;">Share</span>
                </div>
                ';
                if($real){
                    echo '<div class="delete_container d-flex align-items-center delete_post">
                
                    <span class="material-symbols-outlined fs-2">
                        delete
                        </span>
                    <span style="margin-left: 5px;">Delete</span>
                </div>';
                }
                echo'
            </div>
            <div class="collapse" id="collapseExample'.$post_id.'">
                <div class="card card-body">
                    <form class="comm" action="/petchat/partials/comment_creator.php?post_id='.$post_id.'"
                        method="post">
                        <div class="mb-3">
                            <label class="form-label bg-primary">Comment your thoughts</label>
                            <div class="divider"></div>
                            <input type="text" name="comm_text" class="comm_text"
                                placeholder="Write your thoughts...">
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn btn-outline-danger">Comment</button>
                        </div>

                    </form>
                </div>
            </div>
         </div>';
        }
        ?>
        </div>
        <?php
    include 'partials/footer.php';
    ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="script.js"></script>
        <script>
        function autoReSize(textarea) {
            textarea.style.height = "auto";
            textarea.style.height = (textarea.scrollHeight) + "px";
        }

        var input = document.getElementById("post-img-upload");
        var imageName = document.getElementById("image-name");
        input.addEventListener("change", () => {
            console.log("hii");
            let inputImage = input.files[0];
            imageName.innerText = inputImage.name;
        });

        document.querySelectorAll(".frnd-accept").forEach(function(accept_req) {
            accept_req.addEventListener("click", function() {
                var accept = "yes";
                var user_id = this.closest('.friend-card-wrapper').dataset.id;
                var profile = this.closest('.friend-card-wrapper').dataset.profile;
                var clickedElement = this;

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "partials/frnd_handler.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                console.log(xhr);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        if (xhr.responseText === "done") {
                            var req = clickedElement.closest('.friend-card-wrapper');
                            req.style.display = "none";
                        }
                    }
                };
                xhr.send("profile=" + profile + "&accept=" + accept + "&user=" + user_id);
            });
        });

        document.querySelectorAll(".frnd-dec").forEach(function(dec_req) {
            dec_req.addEventListener("click", function() {
                var reject = "yes";
                var user_id = this.closest('.friend-card-wrapper').dataset.id;
                var profile = this.closest('.friend-card-wrapper').dataset.profile;
                var clickedElement = this;

                var xhr = new XMLHttpRequest();
                xhr.open("POST", "partials/frnd_handler.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                console.log(xhr);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        if (xhr.responseText === "done") {
                            var req = clickedElement.closest('.friend-card-wrapper');
                            req.style.display = "none";
                        }
                    }
                };
                xhr.send("profile=" + profile + "&reject=" + reject + "&user=" + user_id);
            });
        });
        var send_req = document.querySelector(".send-request");
        send_req.addEventListener("click",function(){
            var request = "yes";
            var profile = this.getAttribute('data-profile');
            var user = this.getAttribute('data-id');
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "partials/frnd_handler.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            console.log(xhr);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    if (xhr.responseText === "done") {
                        send_req.classList.add("bg-success");
                        send_req.classList.add("text-light");
                        send_req.innerHTML="Request send ✔️";
                    }
                }
            };
            xhr.send("profile=" + profile + "&request=" + request + "&user=" + user);
        })
        
        </script>
</body>

</html>