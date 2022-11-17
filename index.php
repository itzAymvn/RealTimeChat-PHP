<?php 
    include "./MessagesActions/dbh.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Aymvn</title>
    <link rel="stylesheet" href="style.css">
    <script 
        src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous">
    </script>
    <script src="script.js"></script>
</head>
<body>
    <div id="messages"></div>
    <form class="MessageInput">
        <input type="text" id="msg" autofocus minlength="2" maxlength="1000" name="message" placeholder="Message">
        <p id="countDown"></p>
        <button id="submit" type="submit">Send</button>
    </form>
</body>
</html>