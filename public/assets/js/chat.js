document.addEventListener("DOMContentLoaded", function () {
    const userItems = document.querySelectorAll(".user-item");
    const chatMessages = document.getElementById("chat-messages");
    const chatForm = document.getElementById("chat-form");
    const messageInput = document.getElementById("message-input");
    const chatUsername = document.getElementById("chat-username");

    let selectedUserId = null;

    // Khi chọn một người dùng
    userItems.forEach((item) => {
        item.addEventListener("click", function () {
            selectedUserId = this.getAttribute("data-id");
            chatUsername.textContent = this.querySelector("strong").textContent;

            // Xóa tin nhắn cũ
            chatMessages.innerHTML = "";

            // Tải tin nhắn từ server (giả lập)
            fetch(`/messages/${selectedUserId}`)
                .then((response) => response.json())
                .then((messages) => {
                    messages.forEach((message) => {
                        const li = document.createElement("li");
                        li.classList.add("message", message.sent_by_me ? "sent" : "received");
                        li.textContent = message.content;
                        chatMessages.appendChild(li);
                    });
                });
        });
    });

    // Gửi tin nhắn mới
    chatForm.addEventListener("submit", function (e) {
        e.preventDefault();
        if (!messageInput.value.trim() || !selectedUserId) return;

        const message = messageInput.value.trim();
        const li = document.createElement("li");
        li.classList.add("message", "sent");
        li.textContent = message;
        chatMessages.appendChild(li);

        // Gửi tin nhắn đến server
        fetch(`/messages/${selectedUserId}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ content: message }),
        });

        // Xóa ô nhập liệu
        messageInput.value = "";
    });
});
