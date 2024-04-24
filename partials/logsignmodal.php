<!-- signin---modal -->
<div class="container position-fixed w-50 class" style="z-index: 10500; top:10rem; left:29%;">
    <?php
  if(isset($_SESSION['sign_success']) && $_SESSION['sign_success']==true){
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
  else if(isset($_SESSION['login_user_not_found']) && $_SESSION['login_user_not_found']=true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Username not found!!</strong> Username is not correct.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  $_SESSION['login_user_not_found']=false;
  }
  else if(isset($_SESSION['login_alert_success']) && $_SESSION['login_alert_success']==true){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Successfull!</strong> You logged in successfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  $_SESSION['login_alert_success']=false;
  }
  else if(isset($_SESSION['login_pass']) && $_SESSION['login_pass']==true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Wrong password!</strong> Password do not matched.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  $_SESSION['login_pass']=false;
  }

  ?>
</div>
<div class="modal fade" id="signinmodal" aria-hidden="true" aria-labelledby="signinmodalLabel" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h1 class="modal-title fs-5" id="signinmodalLabel">Sign-in</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/petchat/partials/signhandler.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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
                        <button class="btn btn-outline-danger" type="submit">Sign-in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- login---modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h1 class="modal-title fs-5" id="loginModalLabel">Log-in</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/petchat/partials/loginhandler.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pass" id="pass">
                    </div>
                    <div class="modal-footer" style="border-top-color:orangered;">
                        <button type="submit" class="btn btn-outline-danger">Log-in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>