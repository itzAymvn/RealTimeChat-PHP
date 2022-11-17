<?php 
    require_once "dbh.php";
    if(!empty($_POST['name'] && !empty($_POST['message']))) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        $sql = "INSERT INTO $tablename (author, message) VALUES ('$name', '$message');";
        $result = $conn->query($sql);
    } else {
        echo "Please enter your name and message";
    }