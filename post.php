<?php
require 'partials/db_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1250">
    <title>Petchat-home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
    .post_page {
        width: 100%;
        display: flex;
        padding: 3rem 5rem;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .post_card {
        margin-bottom: 50px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
    }

    .post_card img {
        height: 450px;
        width: 100%;
        object-fit: contain;
    }

    .user {
        width: fit-content;
        display: flex;
        gap: 5px;
        padding: 5px;
        align-items: center;
        position: absolute;
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
        height: 30px;
        width: 30px;
    }

    .post_butt {
        height: fit-content;
        width: fit-content;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        position: absolute;
        right: 0px;
        top: 40%;
        gap: 15px;
    }

    .post_butt span {
        font-size: 2.5rem;
    }

    .label {
        margin: 1rem;
        padding: 2px;
        width: fit-content;
        position: absolute;
    }

    .upload {
        border: 1.5px solid #0DCAF0;
        padding: 5px 10px;
        width: 80%;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        border-radius: 5px;
    }

    .upload #uploadfile {
        width: 90%;
    }

    .comm label {
        background-color: #0DCAF0;
        width: 100%;
        padding: 4px 8px;
        border-radius: 5px;
    }

    .divider {
        border: 1px solid gray;
        margin-bottom: 10px;
        margin-right: 5rem;
        margin-left: 5rem;
    }

    .comm {
        border: 1.5px solid #0DCAF0;
        padding: 5px 10px;
        width: 100%;
        margin-bottom: 20px;
        box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
        border-radius: 5px;
    }

    .comm_text {
        width: 80%;
        border-radius: 10px;
        padding: 4px 10px;
        border-color: gray;
        border-width: 1px;
    }
    </style>
</head>

<body>
    <?php
    include 'partials/nav.php';
    include 'partials/logsignmodal.php';
    $petcat_id = $_GET['petcat_id'];
    $sql = "SELECT * FROM `petcategory` WHERE `petcat_id`=$petcat_id";
    $result = mysqli_query($connection,$sql);
    $login_alert=false;
    $image_alert=false;
    $upload_success=false;
    if($rows=mysqli_fetch_assoc($result)){
        
    }
    else{
        echo "page not found";
    }

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
    <div class="label">
        <h3><i>Home<< <?php echo $rows['petcat_name'];?></i>
        </h3>
    </div>
    <div class="container post_page">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Welcome!</strong> This Page is specially created for <?php echo $rows['petcat_name'];?> and all the
            posts related to <?php echo $rows['petcat_name'];?> you wil get here.<br><br> Before starting:- Please
            follow all the community guidlines while using petchat.<br> If anyone founds violating the rule. Then that
            individual will get banned immediately.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <form class="upload" action="/petchat/partials/post_creator.php?petcat_id=<?php echo $petcat_id;?>" method="post" enctype="multipart/form-data">
        <?php
        if($login_alert){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Log-in first!</strong> You need to login first to continue.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($image_alert){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Image not found!</strong> Kindly select a image to upload.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($upload_success){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Post uploaded!</strong> Your post has been successfully uploaded.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
            <div class="mb-3">
                <label class="form-label">Share your memory</label>
                <div class="divider"></div>
                <input type="file" name="uploadfile" class="form-control" id="uploadfile" accept="image/*">
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-outline-danger">Upload</button>
            </div>

        </form>

        <?php
        $sql = "SELECT * FROM `post` WHERE `petcat_id`=$petcat_id";
        $result = mysqli_query($connection,$sql);
        while($rows=mysqli_fetch_assoc($result)){
            $post_id=$rows['post_id'];
            echo '<div class="card post_card" style="width: 80%;">
            <a href="postcontent.php?post_id='.$post_id.'"><img src="partials/images/'.$rows['image'].'" class="card-img-top" alt="..."></a>
            <div class="collapse" id="collapseExample'.$post_id.'">
                <div class="card card-body">
                    <form class="comm" action="/petchat/partials/comment_creator.php?post_id='.$post_id.'" method="post">
                     <div class="mb-3">';
            if(isset($_SESSION['login_alert']) && $_SESSION['login_alert'] == true){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Log-in first!</strong> You need to login first to continue.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                $_SESSION['login_alert'] = false;
            }
            echo '
            <label class="form-label">Comment Your thoughts</label>
            <div class="divider"></div>
            <input type="text" name="comm_text" class="comm_text" placeholder="Write your thoughts...">
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-outline-danger">Comment</button>
        </div>

        </form>
    </div>
    </div>
    <div class="user">
        <div class="circle">
            <img src="partials/images/user.png" alt="">
        </div>
        <h5>Monu Rajput</h5>
    </div>
    <div class="post_butt">
        <span class="material-symbols-outlined">
            favorite
        </span>
        <a class="btn" data-bs-toggle="collapse" href="#collapseExample'.$post_id.'" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <span class="material-symbols-outlined">
                comment
            </span>
        </a>
    </div>
    </div>';
    }

    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>