<?php
require 'db_connect.php';
$logged_user_id = $_SESSION['logged_user_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fetchAll'])) {
        $outgoing_id = $_POST['chat_user_id'];
        $sql = "SELECT * FROM `chat` WHERE (`sender` = $logged_user_id AND `receiver` = $outgoing_id) OR (`sender` = $outgoing_id AND `receiver` = $logged_user_id) ORDER BY `time` ASC";
        $result = mysqli_query($connection, $sql);
        $num = mysqli_num_rows($result);
        $chats = "";
        $lastMsg = null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['sender'] == $logged_user_id) {
                $chats .= '<div class="me"><h6 class="byme">' . $row['msg'] . '</h6></div>';
            } else {
                $chats .= '<div class="you"><h6 class="byyou">' . $row['msg'] . '</h6></div>';
            }
            $lastMsg = $row['time'];
        }
        $response = array(
            'chats' => $chats,
            'lastmsg' => $lastMsg
        );
        echo json_encode($response);
    } else if (isset($_POST['msg'])) {
        $outgoing_id = $_POST['outgoing_id'];
        $msg = $_POST['msg'];

        $sql = "INSERT INTO `chat` (`sender`, `msg`, `receiver`) VALUES ('$logged_user_id', '$msg', '$outgoing_id')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "done";
        }
    } else if (isset($_POST['fetchNew'])) {
        $outgoing_id = $_POST['chat_user_id'];
        $last_msg_time = $_POST['lastmsg'];

        $sql = "SELECT * FROM `chat` WHERE ((`sender` = $logged_user_id AND `receiver` = $outgoing_id) OR (`sender` = $outgoing_id AND `receiver` = $logged_user_id)) AND `time` > '$last_msg_time' ORDER BY `time` ASC";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            $new_chats = "";
            $chat_time = null;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['sender'] == $logged_user_id) {
                    $new_chats .= '<div class="me"><h6 class="byme">' . $row['msg'] . '</h6></div>';
                } else {
                    $new_chats .= '<div class="you"><h6 class="byyou">' . $row['msg'] . '</h6></div>';
                }
                $chat_time= $row['time'];
            }
            if($chat_time!=null){
                $response = array(
                    'chats' => $new_chats,
                    'lastmsg_time' => $chat_time
                );
            }
            else{
                $response = array(
                    'chats' => $new_chats,
                    'lastmsg_time' => $last_msg_time
                );
            }
            echo json_encode($response);
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>
