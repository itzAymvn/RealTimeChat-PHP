<?php
    $servername = "localhost"; // Change this to your server name, if it is Localhost, leave it as it is
    $username = "root"; // Change this to your username, if it is root, leave it as it is
    $password = ""; // Change this to your password, if you don't have a password, leave it as it is
    $dbname = "realtimechat"; // Change this to your database name if you want to use a different database name
    $tablename = "MESSAGES"; // Change this to your table name if you want to use a different table name

    // Create connection

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>