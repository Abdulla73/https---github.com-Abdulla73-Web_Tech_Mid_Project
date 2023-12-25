<?php
session_start();
$name = $_SESSION["user_name"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/dashboard.css">

    <title>Dashboard</title>
</head>

<body>
    <form action="../Controllers/dashboard-ctrl.php" method="post">
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

        <div class="body-area">
            <div class="side-bar">
                <div class="controls">
                    <form action="../Controllers/dashboard-ctrl.php" method="post">
                        <h1>Options:</h1>
                        <table>
                            <tr>
                                <td>
                                    <img src="../Resources/post_logo.png" alt="New post">
                                </td>
                                <td>
                                    <button type="button" name="post-btn" onclick="new_post()">New post</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../Resources/donor_logo.jpg" alt="Donor list">
                                </td>
                                <td>
                                    <button type="submit" name="view-donor">Donor list</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../Resources/Account_logo.jpg" alt="Account">
                                </td>
                                <td>
                                    <button type="submit" name="account">Account</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../Resources/profile_logo.jpg" alt="Profile Setting">
                                </td>
                                <td>
                                    <button type="submit" name="profile-setting">Profile settings</button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="../Resources/feed_logo.jpg" alt="News feed">
                                </td>
                                <td>
                                    <button type="submit" name="news-feed">News feed</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="../Resources/chat.jpg" alt="chat">
                                </td>
                                <td>
                                    <button type="submit" name="chat">Chat</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <img src="../Resources/logout_logo.png" alt="News feed">
                                </td>
                                <td>
                                    <button type="submit" name="sign-out">Sign-out</button>

                                </td>
                            </tr>

                        </table>

                    </form>
                </div>
            </div>

            <div class="other">
                <div class="main-content">
                    <img src="../Resources/uni-1.png" alt="pic">
                    <h3>From fear to courage: </h3>
                    <p>Recalling the moment, Mim said, <br>
                        "I was really scared and I felt <br>
                        I was going to lose my brother. </p>
                    <a href="#">Read more ></a>
                </div>

                <div class="content-text">
                    <img src="../Resources/uni2.png" alt="pic">
                    <h3>From Crisis to Action: UNFPA, UNICEF, & UN Women shed light on key Essential Services to support Gender Based Violence </h3>
                    <a href="#">Read more ></a>
                </div>


                <div class="last-section">
                    <div class="card1">
                        <img src="../Resources/card1.png" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>Health Care</b></h4>
                           
                        </div>
                    </div>
                    <div class="card2">
                        <img src="../Resources/card2.png" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>Meena Cartton</b></h4>
                            
                        </div>
                    </div>
                    <div class="card3">
                        <img src="../Resources/card3.png" alt="Avatar" style="width:100%">
                        <div class="container">
                            <h4><b>Smile & Happy</b></h4>
                            
                        </div>
                    </div>
                    
                </div>
            </div>


        </div>
    </form>
    <div class="add-post hidden" id="add-post">
        <div class="post-form">

            <form action="" method="post">

                <textarea name="new-post" id="post" cols="50" rows="4">

                </textarea>
                <button type="submit" id="post-btn" name="post-btn" formaction="../Controllers/dashboard-ctrl.php">Post</button>
                <button name="cancel" id="cancel" onclick="new_post()">Cancel</button>
            </form>
        </div>
    </div>
    <script src="../Js/dashboard.js"></script>
</body>

</html>