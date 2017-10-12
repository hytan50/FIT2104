<?php
    $db_user = "s26372452";
    $db_pass = "monash00";
    $db_name = "s26372452";
    $db_host = "130.194.7.82";
    $db_port = 3306;

    // Database connection
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }