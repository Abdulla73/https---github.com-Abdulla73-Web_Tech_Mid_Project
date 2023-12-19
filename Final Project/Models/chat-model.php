<?php
include_once 'database.php';
session_start();
$name = $_SESSION["user_name"];
$conn = getConnection();

// Check if a new chat message is being submitted
if (isset($_POST['chat_text'])) {
    
    $chatText = $_POST['chat_text'];

    $query = "INSERT INTO Chat (chat_text, user_name) VALUES ('$chatText', '$name')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo 'Chat successfully inserted!';
    } else {
        echo 'Error inserting chat: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
    exit(); // Stop execution after inserting the chat
}
// Fetch the latest messages
$query = "SELECT * FROM Chat WHERE user_name = '$name' ORDER BY times_col ASC ";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo json_encode(['error' => 'Error fetching chats: ' . mysqli_error($conn)]);
    exit;
}

$chats = [];

while ($row = mysqli_fetch_assoc($result)) {
    $chats[] = $row['chat_text'];
    
}

mysqli_close($conn);

// Return the latest messages as JSON
echo json_encode($chats);


?>
