<?php
include_once '../Models/newsfeed-model.php';
include_once '../Controllers/newsfeed-ctrl.php';
$post = getpost();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/newsfeed.css">

    <title>News feed</title>
</head>

<body>
    <form action="../Controllers/newsfeed-ctrl.php" method="post" id="comment-form">
        <div class="main-container">
            <div class="header">
                <div class="logo">
                    <img src="../Resources/unicef.png" alt="logo">
                </div>

                <div class="header">
                    <div class="text">
                        <h1>Welcome to Dashboard</h1>
                    </div>
                </div>

                <div class="header">
                    <div class="user-info">
                        <h1>Welcome </h1>
                    </div>
                </div>

                <div class="header">
                    <div class="user-name">
                        <h1><?php echo $name ?></h1>
                    </div>
                </div>
            </div>
        </div>

        <?php while ($row = mysqli_fetch_assoc($post)) { ?>
            <div class="post-area">
                <div class="watch-post">
                    <div class="post-content">
                        <h2><?php echo $row['user_name']; ?></h2>
                    </div>
                    <div class="date-time">
                        <p><?php echo $row['created']; ?></p>
                    </div>
                    <div class="post-text">
                        <p><?php echo $row['post']; ?></p>
                    </div>
                    <div class="like-area">
                        <button type="submit" name="like-btn" value="<?php echo $row['created']; ?>">
                            <img src="../Resources/like_logo.jpg" alt="like">
                        </button>

                    </div>
                    <div class="like-count">
                        <p><?php echo $row['likes']; ?></p>
                    </div>

                    <div class="comment-area">

                        <button type="submit" name="comment-btn" value="<?php echo $row['created']; ?>">
                            <img src="../Resources/dislike_logo.jpg" alt="dislike">
                        </button>


                    </div>

                    <div class="comment-count">
                        <p><?php echo $row['dislike_count']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>

    </form>
    <script src="../Js/newsfeed.js"></script>
</body>