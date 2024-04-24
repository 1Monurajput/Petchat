<?php
?>
<nav class="navbar navbar-expand-lg bg-light"
    style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; position: fixed; z-index: 1000;">
    <div class="container-fluid h-50">
        <a class="navbar-brand text-primary fw-bold" href="/petchat/home.php" style="font-size:1.8rem;">🐶<i>Pet-Chat</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav" style="margin-left: 20rem; margin-right: 10rem;">
                <li class="nav-item" style="margin-right: 1rem;">
                    <a class="nav-link active" aria-current="page" href="/petchat/home.php"><span
                            class=" material-symbols-outlined" style="font-size:2.1rem;">
                            home
                        </span></a>
                </li>
                <li class="nav-item " style="margin-right: 1rem;">
                    <a class="nav-link" href="/petchat/main_post.php"><span class=" material-symbols-outlined"
                            style="font-size:2.1rem;">
                            post_add
                        </span></a>
                </li>
                <li class="nav-item" style="margin-right: 1rem;">
                    <a class="nav-link" href="/petchat/msg.php"><span class=" material-symbols-outlined"
                            style="font-size:2.1rem;">
                            sms
                        </span></a>
                </li>
            </ul>
            <form class="d-flex" role="search" style="margin-right:.5rem;">
                <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger me-1" type="button">Search</button>
            </form>
            <form style="margin-right:1rem;">
                <?php
        if(isset($_SESSION['login_success']) && $_SESSION['login_success']==true){
            $dp;
            if(isset($_SESSION['logged_user_dp'])){
                $dp=$_SESSION['logged_user_dp'];
            }
            else{
                $dp='user.png';
            }
          echo ' <div class="btn-group" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
          <a href="/petchat/profile.php?petuser_id='.$_SESSION['logged_user_id'].'"><button type="button" class="btn btn-danger px-4"><img src="partials/images/'.$dp.'" style="height:32px;width:32px; border-radius:50%;"alt="">
          </button></a>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" style="margin-left:-4px;"
              data-bs-toggle="dropdown" aria-expanded="false">
              <span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu" style="left:-30%;">
              <li><a class="dropdown-item" href="/petchat/profile.php">View profile</a></li>
              <li><a class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover "
                      style="margin-left:1rem;"
                      href="http://localhost/petchat/partials/logouthandler.php">Log-out</a></li>
              <li>
                  <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Separated link</a></li>
          </ul>
      </div>';
        }
        ?>
            </form>
        </div>
    </div>
</nav>


<script>
setInterval(function() {
    var logged_user_id = <?php echo $_SESSION['logged_user_id'];?>;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/petchat/partials/online_offline.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.response);
        }
    }
    xhr.send("logged_user_id=" + logged_user_id);
}, 20000);
</script>