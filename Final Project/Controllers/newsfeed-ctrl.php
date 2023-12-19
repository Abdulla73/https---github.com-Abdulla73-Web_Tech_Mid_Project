<?php
include_once '../Models/newsfeed-model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["like-btn"])) {
        $created = $_POST['like-btn'];
        $like_count = getlikes($created);

        if ($like_count) {
            header("Location:../Views/news-feed.php");
        } else {
            echo "failed to like for post created on $created";
        }
    } 
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["comment-btn"])) {
        $created = $_POST['comment-btn'];
        $like_count = getdislikes($created);

        if ($like_count) {
            header("Location:../Views/news-feed.php");
        } else {
            echo "failed to like for post created on $created";
        }
    } 
    
}

?>
