<?php
session_start();
include_once '../Models/dashboard-model.php';

if (isset($_POST["sign-out"])) {
    session_destroy();
    header("Location:../Views/login.php");
    exit();
}

$username=$_SESSION["user_name"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["view-donor"])) {
        header("Location:../Views/view-donor.php");
        exit();
    }

    if (isset($_POST["account"])) {
        header("Location:../Views/account.php");
        exit();
    }

    if (isset($_POST["profile-setting"])) {
        header("Location:../Views/profile-setting.php");
        exit();
    }

    if (isset($_POST["news-feed"])) {
        header("Location:../Views/news-feed.php");
        exit();
    }

    if (isset($_POST["nothing"])) {
        header("Location:../Views/login.php");
        exit();
    }

}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["post-btn"])) {
    if (!empty($_POST["new-post"])) {
        $postText = $_POST["new-post"];
        $textpost = textpost($username, $postText);
        header("Location:../Views/dashboard.php");
    } else {
        echo "Post content is empty.";
    }
}
 

?>
