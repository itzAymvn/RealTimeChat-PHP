<?php
    require_once "dbh.php";
    $nameOfSender= $_POST['sender'];
    echo "<p class='Greeting'>Your username: " . $nameOfSender . "</p>"; // This is the only line that is different from load-comments.php
    $sql = "SELECT * FROM $tablename ORDER BY id;"; // Select all messages from the database and order them by id (the order they were inserted)
    $result = $conn->query($sql); // Execute the query
    if ($result->rowCount()>0) { // If there are any messages in the database
        while($row = $result->fetch(PDO::FETCH_ASSOC)) { // Loop through all the messages in the database and store them in $row
            if ($row['author'] == $nameOfSender) { // If the author of the message is the same as the name of the sender
                $row['author'] = "<span style='color: red;'>" . htmlentities($row['author']) . "</span>"; // Make the author's name red
                $delete = "<button value='" . $row['id'] . "' class='deletePost'>🗑️</a>"; // Add a delete button to the message
                $comment = "
                    <div class='comment yourComment'>
                        <div class='textCmnt'><p>".$row['author'].": " .htmlentities($row['message']) . "</p> " . $delete . "</div>
                    </div>"; // Create a div with the message and the delete button
            } else { // If the author of the message is not the same as the name of the sender
                $row['author'] = "<span>" . htmlentities($row['author']) . "</span>"; // Make the author's name black
                $delete = ""; // Don't add a delete button to the message
                $comment = "
                    <div class='comment'>
                        <div class='textCmnt'><p>".$row['author'].": " .htmlentities($row['message']) . "</p> " . $delete . "</div>
                    </div>
                    "; // Create a div with the message
            }
            echo $comment; // Echo the message
        } 
    }
?>