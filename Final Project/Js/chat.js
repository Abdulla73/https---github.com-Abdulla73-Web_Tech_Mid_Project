function sendChatToServer() {
    const chatText = document.getElementById('chat-text').value;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../Models/chat-model.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Chat successfully sent!');
            document.getElementById('chat-text').value = ''; // Clear the input field
            fetchAndDisplayChats(); // Fetch and display the latest chats
        }
    };

    xhr.onerror = function() {
        console.error('Error sending chat. Check your connection!');
    };

    xhr.send('chat_text=' + encodeURIComponent(chatText));
}
function fetchAndDisplayChats() {
    const chatContainer = document.getElementById('chat-container');

    // Fetch the latest messages
    const xhr = new XMLHttpRequest();
    xhr.open('GET', '../Models/chat-model.php', true);

    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Server Response:', xhr.responseText); // Log the response
            try {
                // Parse the JSON response
                const chats = JSON.parse(xhr.responseText);
               

                // Update the DOM with the latest messages
                chatContainer.innerHTML = ''; // Clear existing content

                // Create a chat container for each chat message
                chats.forEach(chat => {
                    const chatDiv = document.createElement('div');
                    chatDiv.className = 'container darker';
                    chatDiv.innerHTML = `
                        <img src="../Resources/unicef.png" alt="Avatar" class="right">
                        <p>${chat}</p>
                        
                    `;
                    chatContainer.appendChild(chatDiv);
                });
            } catch (error) {
                console.error('Error parsing JSON:', error);
            }
        } else {
            console.error('Error fetching chats. HTTP status:', xhr.status);
        }
    };

    xhr.onerror = function() {
        console.error('Error fetching chats. Check your connection!');
    };

    xhr.send();
}




// Call fetchAndDisplayChats initially to load existing messages
fetchAndDisplayChats();

// Set up the click event for the send button
const sendButton = document.getElementById('send-chat');
sendButton.addEventListener('click', sendChatToServer);
