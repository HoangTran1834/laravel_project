document.addEventListener('DOMContentLoaded', () => {
    const chatBox = document.getElementById('chat-box');
    const chatToggle = document.getElementById('chat-toggle');
    const closeChat = document.getElementById('close-chat');
    const bling = document.getElementById('bling');

    // Toggle chat box visibility
    chatToggle.addEventListener('click', () => {
        chatBox.classList.toggle('hidden');
    });

    // Close chat box
    closeChat.addEventListener('click', () => {
        chatBox.classList.add('hidden');
    });
});
