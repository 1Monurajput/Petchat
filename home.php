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

    .story {
        width: 260px;
        height: 310px;
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
        border-radius: 20px;
        position: relative;
    }

    .user-details {
        position: absolute;
        display: flex;
        top: 0%;
        padding: 10px;
        align-items: center;
        gap: 5px;
    }

    .user-img {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        border: 2px solid orangered;
    }

    .user-img img {
        height: 30px;
        width: 30px;
        border-radius: 50%;
        object-fit: contain;
        object-position: center;
    }

    .story_container {
        display: grid;
        padding: 4rem 10rem;
        grid-template-columns: auto auto auto;
        gap: 50px;
    }

    .story img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
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
    ?>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="partials/images/car (1).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Make Friends</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="partials/images/car (2).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Share Your memory</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="partials/images/car (3).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>See whole world</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="partials/images/car (4).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="partials/images/car (5).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="partials/images/car (6).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="story_container">
        <!-- Modal -->
        <div class="modal fade" id="storyUpload" tabindex="-1" aria-labelledby="storyUploadLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="storyUploadLabel">Create Story</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form style="padding: 20px;" action="/petchat/partials/story_creator.php" method="post"
                            enctype="multipart/form-data">
                            <input type="file" name="story" accept="image/*">
                            <button class="btn btn-outline-danger"> Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="story upload-story p-5 bg-secondary">
            <img src="partials/images/plus-icon-13089.png" class="card-img-top" alt="..." data-bs-toggle="modal"
                data-bs-target="#storyUpload">
        </div>
        <?php
        $sql = "SELECT * FROM `story`";
        $result = mysqli_query($connection,$sql);
        while($stories = mysqli_fetch_assoc($result)){
            $user_sql = "SELECT * FROM `petuser` WHERE `petuser_id` = 3";
            $user_result=  mysqli_query($connection,$user_sql);
            $user_details = mysqli_fetch_assoc($user_result);
            $dp=$user_details['image'];
            if(strlen($dp)<3){
                $dp = "user.png";
            }
            $name = $user_details['name'];
            if(strlen($name)<1){
                $name = $user_details['petuser_name'];
            }

            echo '<div class="story">
            <img src="partials/images/'.$stories['image'].'" class="card-img-top" alt="...">
            <div class="user-details">
                <div class="user-img">
                    <img src="partials/images/'.$dp.'" alt="">
                </div>
                <div class="user-name fs-6">
                    '.$name.'
                </div>
            </div>
        </div>';
            
        }
        
        ?>

    </div>
    <div class="latest-post">
        <div class="latest-post-label bg-primary text-light fs-5">
            <h5 style="padding: 5px 20px;">Latest-posts</h5>
        </div>
        <div class="container post_page">
            <?php
            $sql = "SELECT * FROM `post` ORDER BY `time` DESC LIMIT 20";
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

    </div>
    <?php
    include 'partials/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="script.js">
    </script>
</body>

</html>