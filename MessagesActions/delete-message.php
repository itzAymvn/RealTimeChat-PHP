<?php
    require_once "dbh.php";
    $id = $_POST['id'];
    $sql = "DELETE FROM $tablename WHERE id = '$id';";
    try {
        $result = $conn->exec($sql);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
