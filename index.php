<?php
require 'partials/db_connect.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <title>Petchat-home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    body {
        font-family: "Roboto Slab", serif;
        font-family: "Roboto Slab", serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
    }

    .main-box {
        height: 632px;
        background-color: #F0F2F5;
        position: relative;
    }

    .alert-box {
        position: absolute;
        z-index: 10500;
        top: 15%;
        width: 60%;
        left: 20%;

    }

    .index_info {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .index_info-box {
        width: 80%;
        height: max-content;
        display: flex;
        flex-direction: column;
        margin-left: 6rem;
    }

    .index_info-box h2 {
        font-size: 3.8em;
        font-weight: 700;
    }

    .index_info-box p {
        font-size: 1.5em;
        color: black;
    }

    .login {
        width: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        width: 60%;
        padding: 1rem 1.2rem;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        position: relative;
    }
    .notice{
        position: absolute;
        font-size: .8rem;
        top: 105%;
    }
    .login-container button {
        font-size: 1.3rem;
        padding: 5px 0px;

    }

    .modal-button {
        font-size: 1.3rem;
        padding: 5px 0px;
    }

    .divider {
        border: 1px solid rgb(188, 188, 188);
        margin: 1.5rem 0;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="modal fade" id="signinmodal" aria-hidden="true" aria-labelledby="signinmodalLabel" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h1 class="modal-title fs-5" id="signinmodalLabel">Sign-in</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/petchat/partials/signhandler.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="signusername" class="form-label">Username</label>
                                <input type="text" class="form-control" id="signusername" name="username"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                            </div>
                            <div class="mb-3">
                                <label for="cexampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cexampleInputPassword1" name="cpass">
                            </div>
                            <div class="modal-footer" style="border-top-color:orangered;">
                                <button class="btn btn-outline-success w-100 modal-button"
                                    type="submit">Sign-in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-box w-100 d-flex">
        <div class="container alert-box">
            <?php
            if(isset($_SESSION['login_user_not_found']) && $_SESSION['login_user_not_found']==true){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username not found!!</strong> Username is not correct.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $_SESSION['login_user_not_found']=false;
            }
            else if(isset($_SESSION['login_pass']) && $_SESSION['login_pass']==true){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Wrong password!</strong> Password do not matched.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $_SESSION['login_pass']=false;
            }
            else if(isset($_SESSION['sign_success']) && $_SESSION['sign_success']==true){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>sign-in Successfull!</strong> Now you can log-in to continue.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $_SESSION['sign_success']=false;
              }
              else if(isset($_SESSION['sign_pass']) && $_SESSION['sign_pass']==true){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Passwords!</strong> Passwords do not matched.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $_SESSION['sign_pass']=false;
              }
              else if(isset($_SESSION['sign_user']) && $_SESSION['sign_user']==true){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Username not available!</strong> Username is already taken. Try others.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $_SESSION['sign_user']=false;
              }
              else if(isset($_SESSION['sign_email']) && $_SESSION['sign_email']==true){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>E-mail already exists!</strong> Try to add unique email to continue.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              $_SESSION['sign_email']=false;
              }
            ?>
        </div>
        <div class="index_info">
            <div class="index_info-box">
                <h2 class="text-primary">Petchat</h2>
                <p>petchat helps you ask and share your best memory with your cute ones around the world.</p>
            </div>
        </div>
        <div class="login">
            <div class="container  login-container" style="border:2px solid #2B80FC; border-radius: 20px;">
                <form action="/petchat/partials/loginhandler.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass">
                    </div>
                    <button type="submit" class="btn btn-outline-danger w-100">Log-in</button>
                    <div class="text-center mt-2">
                        <a href="#">Forgotten password?</a>
                    </div>
                    <div class="divider"></div>
                    <button type="button" class="btn btn-outline-success w-100 mb-3" data-bs-toggle="modal"
                        data-bs-target="#signinmodal">Create new account</button>
                </form>
                <div class="notice text-danger">
                    <p>Petchat only supports desktop-mode for now!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>