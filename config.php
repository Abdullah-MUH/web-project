<?php
    // Create Connection
    $conn = mysqli_connect('localhost', 'project', '1234', 'cinema');

    // Check Connection
    if(mysqli_connect_errno()){
        // Connection Failed
        echo 'Failed to connect to MySQL '. mysqli_connect_errno();
    }
?>