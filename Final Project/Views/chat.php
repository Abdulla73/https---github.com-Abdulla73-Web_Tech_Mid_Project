<?php
include_once '../Models/account-model.php';
session_start();
$name = $_SESSION["user_name"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/chat.css">
    <title>Chat</title>
</head>

<body>
    <form action="../Controllers/chat-ctrl.php" method="post">
        <div class="main-container">
            <div class="header">
                <div class="logo">
                    <img src="../Resources/unicef.png" alt="logo">
                </div>

                <div class="header">
                    <div class="text">
                        <h1>Chats</h1>
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

        <div class="chat-part">
            <div class="chat-frame">
                <div class="chat-area">

                    <div class="container">
                        <img src="../Resources/user_anna.jpg" alt="Avatar">
                        <p>Hello. How are you today?</p>
                        <span class="time-right">11:00</span>
                    </div>

                    <div class="container darker" id="chat-container">
                       
                    </div>

                    <div class="chat-input">
                        <input type="text" name="chat-text" id="chat-text" placeholder="Chat here">
                        <button type="button" name="send-chat" id="send-chat">Send</button>


                    </div>

                </div>

                <div class="other-chat">
                    <h2>Other's avalable:</h2>
                    <div class="othe-chats">
                        <img src="../Resources/user_anna.jpg" alt="user">
    
                    </div>

                    <div class="name-here">
                        <p>Europe-Asia wellfair</p>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <script src="../Js/chat.js"></script>
</body>

</html>