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
        width: 85%;
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

    input[type="file"] {
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
    </style>
</head>

<body>
    <?php
    include 'partials/nav.php';
    
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
                                    <h5 class="mt-2 fs-6"><?php echo $_SESSION['logged_user_name'];?></h5>
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
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Welcome!</strong> This Page is specially created for Animal lovers and all the
            posts related to animals you wil get here.<br><br> Before starting:- Please
            follow all the community guidlines while using petchat.<br> If anyone founds violating the rule. Then that
            individual will get banned immediately.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                        data-bs-target="#post_upload_modal">Share your memory with us!</button>
                </div>
            </div>
        </div>

        <?php
        $sql = "SELECT * FROM `post` ORDER BY `time` DESC";
        $result = mysqli_query($connection,$sql);
        $logged_user_id;
        if(isset($_SESSION['logged_user_id'])){
            $logged_user_id = $_SESSION['logged_user_id'];
        }
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
            echo '<div class="card post_card" style="width: 80%;" data-id="'.$post_id.'">
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
            let inputImage = document.querySelector("input[type=file]").files[0];
            imageName.innerText = inputImage.name;
        })
        </script>
</body>

</html>