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

    .postcontent-box {
        width: 80%;
        border-radius: 20px;
        flex-direction: column;
        margin-bottom: 5rem;
        padding-top: 80px;
    }

    .post_card {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    a {
        text-decoration: none;
    }

    .post_text {
        width: 100%;
        padding-top: 80px;
        padding-left: 60px;
        padding-bottom: 30px;
        padding-right: 100px;
    }

    .post_text h5 {
        color: black;
        font-weight: normal;
        font-size: 1.4rem;
    }

    .post_card .post_container img {
        height: 500px;
        width: 100%;
        object-fit: contain;
        background-color: black;
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

    .cmnt-body {
        width: 100%;
    }

    .comm {
        /* border: 1.5px solid orangered; */
        padding: 15px 10px;
        width: 100%;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 5px;
    }

    .comm_text {
        width: 80%;
        border-radius: 10px;
        padding: 6px 15px;
        border-color: gray;
        border-width: 1px;
    }

    .all-comments {
        width: 100%;
        padding: 10px 20px;
        max-height: 300px;
        overflow: auto;
    }

    .all-comments::-webkit-scrollbar {
        display: none;
    }

    .comment-wrapper {
        margin-bottom: 1rem;
        padding: 14px 20px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 15px;
        margin-top: 5px;
        padding-bottom: 0;
    }

    .comment-wrapper img {
        height: 50px;
        width: 50px;
        object-fit: cover;
        object-position: center;
        border-radius:50%;
    }

    .comment-contentbox {
        display: flex;
        justify-content: center;
        align-items: start;
        flex-direction: column;
        padding: 5px 10px 5px 30px;
        margin-left: 4rem;
        margin-top: -1.5rem;
        word-wrap: break-word;
    }

    .cmnt-user {
        margin-left: 8px;
        color: orangered;
    }

    .cmnt-user h6 {
        font-size: 1.1rem;
    }

    .comment-slip {
        color: gray;
        font-size: .8rem;
        display: flex;
        align-items: center;
        gap: 5px;
        margin-left: 80%;
    }
    </style>
</head>

<body>
    <?php
    include 'partials/nav.php';
    $post_id=$_GET['post_id'];
    ?>
    <div class="container postcontent-box">
        <?php
        $sql = "SELECT * FROM `post` WHERE `post_id`=$post_id";
        $result = mysqli_query($connection,$sql);
        $logged_user_id;
        if(isset($_SESSION['logged_user_id'])){
            $logged_user_id = $_SESSION['logged_user_id'];
        }
        if($rows=mysqli_fetch_assoc($result)){
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
            echo '<div class="card post_card" style="width: 100%;" data-id="'.$post_id.'">
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
            </div>';}?>
        <div class="container">
            <div class="cmnt-body">
                <form class="comm" action="/petchat/partials/comment_creator.php?post_id=<?php echo $post_id?>"
                    method="post">
                    <div class="mb-3">
                        <label class="form-label bg-primary">Comment your thoughts</label>
                        <div class="divider"></div>
                        <input type="text" name="comm_text" class="comm_text" placeholder="Write your thoughts...">
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-outline-danger">Comment</button>
                    </div>

                </form>
                <div class="all-comments">
                    <?php
                    $sql = "SELECT * FROM `comments` WHERE `post_id`=$post_id";
                    $result = mysqli_query($connection,$sql);
                    $num = mysqli_num_rows($result);
                    while($rows = mysqli_fetch_assoc($result)){
                        $petuser_id=$rows['petuser_id'];
                        $user_sql = "SELECT * FROM `petuser` WHERE `petuser_id`=$petuser_id";
                        $user_result = mysqli_query($connection,$user_sql);
                        $user=mysqli_fetch_assoc($user_result);
                        $name = $user['name'];
                        if(strlen($name)==0){
                            $name="@".$user['petuser_name'];
                        }
                        $user_dp=$user['image'];
                        if(strlen($user_dp)<3){
                            $user_dp = "user.png";
                        }
                        echo '
                        <div class="comment-wrapper">
                    <div class="something">
                        <div class="flex-shrink-0 d-flex align-items-center">
                            <img src="partials/images/'.$user_dp.'" class="defaultuser">
                            <div class="cmnt-user">
                                <h6>'.$name.'</h6>
                            </div>
                        </div>
                        <div class="comment-contentbox">
                            <div class="flex-grow-1">
                                '.$rows['comment_discription'].'
                            </div>
                            <div class="comment-slip">
                                <span class="material-symbols-outlined" style="font-size:1.2rem;">
                                    favorite
                                </span>
                                <span> '.$rows['time'].'</span>
                            </div>
                        </div>
                    </div>
                    </div>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="script.js"></script>

</body>

</html>