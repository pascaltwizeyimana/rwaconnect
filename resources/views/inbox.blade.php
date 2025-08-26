<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inbox - RwaConnect</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 30%;
            border-right: 1px solid #ddd;
            background: #f9f9f9;
            display: flex;
            flex-direction: column;
        }

        .sidebar-header {
            padding: 15px;
            font-weight: bold;
            font-size: 18px;
            border-bottom: 1px solid #ddd;
        }

        .chat-list {
            flex: 1;
            overflow-y: auto;
        }

        .chat-item {
            display: flex;
            align-items: center;
            padding: 12px;
            cursor: pointer;
            border-bottom: 1px solid #eee;
        }
        .chat-item:hover {
            background: #e6f0ff;
        }
        .chat-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            margin-right: 10px;
            background: #ccc;
        }
        .chat-info {
            flex: 1;
        }
        .chat-info strong {
            display: block;
        }
        .chat-info small {
            color: #666;
        }

        /* Chat window */
        .chat-window {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .chat-header {
            padding: 15px;
            font-weight: bold;
            border-bottom: 1px solid #ddd;
            background: #f5f5f5;
        }

        .messages {
            flex: 1;
            padding: 15px;
            overflow-y: auto;
            background: #fafafa;
        }

        .message {
            margin-bottom: 12px;
            max-width: 70%;
            padding: 10px;
            border-radius: 12px;
            clear: both;
        }
        .message.sent {
            background: #1da237;
            color: white;
            margin-left: auto;
            text-align: right;
        }
        .message.received {
            background: #e5e5ea;
            color: black;
            margin-right: auto;
            text-align: left;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
            background: #fff;
        }
        .chat-input input {
            flex: 1;
            padding: 10px;
            border-radius: 20px;
            border: 1px solid #ccc;
            outline: none;
        }
        .chat-input button {
            background: #1da237;
            border: none;
            color: white;
            padding: 10px 18px;
            border-radius: 20px;
            margin-left: 8px;
            cursor: pointer;
        }
        .chat-input button:hover {
            background: #14892c;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">Chats</div>
        <div class="chat-list">
            <div class="chat-item">
                <div class="chat-avatar"></div>
                <div class="chat-info">
                    <strong>Yvette</strong>
                    <small>wassup 😎</small>
                </div>
            </div>
            <div class="chat-item">
                <div class="chat-avatar"></div>
                <div class="chat-info">
                    <strong>Jonas</strong>
                    <small>See you tomorrow</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Window -->
    <div class="chat-window">
        <div class="chat-header">Yvette</div>
        <div class="messages">
            <div class="message received">Hey, how are you?</div>
            <div class="message sent">I’m good, you?</div>
            <div class="message received">Chilling, what about basketball?</div>
            <div class="message sent">Training later today 🏀</div>
        </div>
        <form class="chat-input">
            <input type="text" placeholder="Type a message...">
            <button type="submit">Send</button>
        </form>
    </div>
</body>
</html>
