<?php
session_start();
?>
<?php
$servername = "localhost";
$password = "";
$username = "root";
$database = "petchat";
$connection = mysqli_connect($servername,$username,$password,$database);
if(!$connection){
    echo "failed in establishing connection!!! <br>>";
}
?>
