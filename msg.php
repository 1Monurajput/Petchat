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
        overflow: hidden;
    }

    .main-box {
        width: 100%;
        display: flex;
        padding-top: 73px;
    }

    .people-box-info {
        display: flex;
        width: 100%;
        padding: 1rem;
        flex-direction: column;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }

    .people-box-info input {
        width: 70%;
        border-radius: 10px;
        outline: none;
        padding: 2px 8px;
        border: 2px solid gray;
    }

    .main-box .people-box {
        width: 50%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-right: 1px solid gray;
    }

    .main-box .chat-box {
        width: inherit;
        height: 100%;
    }

    .people-box .chat-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        overflow-y: auto;
    }

    .people-box .people-wrapper {
        height: 5rem;
        width: 90%;
        border-radius: 15px;
        display: flex;
        transition: all .2s ease-in-out;
        cursor: pointer;
        align-items: center;
        gap: 10px;
        padding: 4px .7rem;
        margin-top: 1rem;
    }

    .people-wrapper:hover {
        background-color: rgb(231, 231, 231);
        transition: all .1s step-start;
    }

    .people-wrapper .people-dp img {
        height: 4rem;
        width: 4rem;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
        border: .2px solid black;
    }

    .people-wrapper .people-info {
        line-height: 4px;
    }

    .people-info p {
        font-size: 15px;
        color: gray;
    }

    .active_status {
        margin-left: 30%;
    }

    .dot_status {
        height: 15px;
        width: 15px;
        border-radius: 50%;
        background-color: green;
        display: none;
    }

    .chat-box-people-info {
        width: 100%;
        display: flex;
        padding: .5rem 1rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .chat-box img {
        height: 4rem;
        width: 4rem;
        object-fit: cover;
        object-position: center;
        border-radius: 50%;
    }

    .msg-area {
        background-image: url(partials/images/gh.jpg);
        background-position: center;
        background-size: contain;
        background-repeat: no-repeat;
        width: 100%;
        height: 399px;
        text-align: left;
        padding: 20px 20px 0px 20px;
        overflow-y: auto;
        background-color: rgb(240, 240, 240);
        z-index: -1;
    }

    .msg-area::-webkit-scrollbar {
        display: none;
    }

    .dot {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 1.5rem;
    }

    .convo-area {
        width: 100%;
        padding-bottom: 15px;
    }

    .me {
        width: 100%;
        display: flex;
        justify-content: end;
        padding: 2px 2px;
    }

    .byme {
        background-color: lightgreen;
        border-radius: 10px 15px 0px 10px;
    }

    .byyou {
        background-color: #fff;
        border-radius: 15px 10px 10px 0px;
    }

    .you {
        width: 100%;
        display: flex;
        justify-content: start;
        padding: 2px;
    }

    .convo-area h6 {
        font-weight: 400;
        max-width: 20rem;
        padding: 8px 12px;
        word-wrap: break-word;
        box-shadow: rgba(9, 30, 66, 0.25) 0px 4px 8px -2px, rgba(9, 30, 66, 0.08) 0px 0px 0px 1px;
    }

    .send-area {
        width: 100%;
        height: 70px;
        padding: .5rem 1rem;
        display: flex;
        align-items: center;
        box-shadow: 0px -6px 8px rgba(0, 0, 0, 0.24);
    }

    .send-area input {
        outline: none;
        width: 60%;
        margin-right: 15px;
        height: 2.5rem;
        border: 1.5px solid gray;
        padding: 2px 10px;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <?php
    include 'partials/nav.php';
    ?>
    <div class="main-box">
        <div class="people-box">
            <div class="people-box-info">
                <h2>Chats</h2>
                <!-- <div class="search-box">
                    <input type="search" placeholder="Search User">
                </div> -->
                <div class="btn btn-outline-primary w-25 mt-4">Inbox</div>
            </div>
            <div class="chat-wrapper">
                <?php
                $logged_user = $_SESSION['logged_user_id'];
                $sql = "SELECT * FROM `friends` WHERE `petuser_id`= $logged_user AND `status` ='friends'";
                
                $result = mysqli_query($connection,$sql);
                while($frnds=mysqli_fetch_assoc($result)){
                    $frnd_id = $frnds['frnd_id'];
                    $sql2 = "SELECT * FROM `petuser` WHERE `petuser_id` =$frnd_id ";
                    $result2 = mysqli_query($connection,$sql2);
                    $rows= mysqli_fetch_assoc($result2);
                    $dp = $rows['image'];
                    $name =  $rows['name'];
                    $chat_user_id = $rows['petuser_id'];
                    if(strlen($dp)<=3){
                        $dp = "user.png";
                    }
                    if(strlen($name)==0){
                        $name ='@'. $rows['petuser_name'];
                    }

                    echo '<div class="people-wrapper chat-person" data-id="'.$chat_user_id.'" data-dp="'.$dp.'" data-name="'.$name.'" data-person="'.$frnd_id.'">
                    <div class="people-dp">
                        <img src="partials/images/'.$dp.'" alt="img">
                    </div>
                    <div class="people-info">
                        <h5>'.$name.'</h5>
                        <p>this is last message</p>
                    </div>
                    <div class="active_status">
                        <div class="dot_status">
                        </div>
                    </div>
                </div>';
                }
                ?>
                <!-- <div class="people-wrapper">
                    <div class="people-dp">
                        <img src="partials/images/IMG-20200601-WA0013_1591030393200.jpg" alt="img">
                    </div>
                    <div class="people-info">
                        <h5>Monu rajput</h5>
                        <p>this is last message</p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="chat-box">
            <div class="chat-box-people-info" style="border-bottom: 2px solid rgb(206, 206, 206);">
                <img class="chat_user_img" src="partials/images/user.png" alt="img">
                <h5 class="chat_user_name">A_petchat_user</h5>
            </div>
            <div class="msg-area">
                <div class="dot">
                    <img class="chat_user_img" src="partials/images/user.png" alt="img">
                    <h5 class="chat_user_name">A_petchat_user</h5>
                </div>
                <div class="convo-area">
                    <!-- <div class="me">
                        <h6 class="byme">This msg is from my side</h6>
                    </div>
                    <div class="you">
                        <h6 class="byyou">This msg is from Your side</h6>
                    </div>   -->
                </div>
            </div>
            <div class="send-area">
                <input type="text" placeholder="Type your message" id="msg-box">
                <button type="submit" class="btn btn-outline-success" id="send-msg">Send</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    var new_chat;
    document.querySelectorAll(".chat-person").forEach(function(chat_person) {
        chat_person.addEventListener("click", function() {
            var chat_user = this.dataset.id;
            var chat_dp = this.dataset.dp;
            var chat_name = this.dataset.name;
            document.querySelectorAll(".chat_user_name").forEach(function(element) {
                element.textContent = chat_name;
            })
            document.querySelectorAll(".chat_user_img").forEach(function(image) {
                image.src = "partials/images/" + chat_dp;
            })

            var send = document.querySelector("#send-msg");
            send.dataset.chatuserid = chat_user;

            var fetchAll = "yes";
            var lastmsg;

            // time to write ajax
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "partials/chat_handler.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var response = JSON.parse(this.responseText);
                    var convoArea = document.querySelector(".convo-area");
                    convoArea.innerHTML = response.chats;
                    lastmsg = response.lastmsg;
                    // console.log(lastmsg);
                    clearInterval(new_chat);
                    chatScroll();
                    new_chat = setInterval(function() {
                        fetchNewChats();
                    }, 500);

                }
            };
            xhr.send("chat_user_id=" + chat_user + "&fetchAll=" + fetchAll);

            function fetchNewChats() {
                var xhr2 = new XMLHttpRequest();
                var fetchNew = "yes";
                xhr2.open("POST", "partials/chat_handler.php", true);
                xhr2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr2.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        var response2 = JSON.parse(this.responseText);
                        var convoArea = document.querySelector(".convo-area");
                        if (response2.chats) {
                            convoArea.insertAdjacentHTML('beforeend', response2.chats);
                            chatScroll();
                        }
                        lastmsg = response2.lastmsg_time;
                    }
                }
                xhr2.send("chat_user_id=" + chat_user + "&fetchNew=" + fetchNew + "&lastmsg=" +
                    lastmsg);
            }


        })
    })

    function chatScroll() {
        var scroll = document.querySelector(".msg-area");
        scroll.scrollTop = scroll.scrollHeight - scroll.clientHeight;
    }


    // send message
    var send = document.querySelector("#send-msg");
    send.addEventListener("click", function() {
        var chat_user_id = this.dataset.chatuserid;
        var msg = document.querySelector("#msg-box").value;
        if (msg.length > 0) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "partials/chat_handler.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText == "done") {
                        document.querySelector("#msg-box").value = "";
                    }
                }
            }
            xhr.send("outgoing_id=" + chat_user_id + "&msg=" + msg);
        }
    })

    // active status

    function updateChatStatus() {
        document.querySelectorAll(".chat-person").forEach(function(chat_person) {
            var status_id = chat_person.dataset.person;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "partials/active_status.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.response == 1) {
                        chat_person.querySelector(".dot_status").style.display = "flex";
                    } else {
                        chat_person.querySelector(".dot_status").style.display = "none";
                    }
                }
            };
            xhr.send("status_id=" + status_id);
        });
    }
    updateChatStatus();
    setInterval(updateChatStatus, 60000);
    </script>
</body>

</html>