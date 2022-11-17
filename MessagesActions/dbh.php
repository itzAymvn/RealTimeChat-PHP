<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "realtimechat";
    $tablename = "MESSAGES";

    // Create connection

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
?>