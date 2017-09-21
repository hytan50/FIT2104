<?php
  define("PRODUCTION", false);
  define("SITE_ROOT", realpath(dirname(__FILE__)));

  if (PRODUCTION == true) {
    // Production DB settings
    $db_user = "s24201596";
    $db_pass = "monash00";
    $db_name = "s24201596";
    $db_host = "130.194.7.82";
    $db_port = 3306;
  } else {
    // Local settings (MAMP)
    $db_user = "root";
    $db_pass = "root";
    $db_name = "s24201596";
    $db_host = "localhost";
    $db_port = 8889;
  }

  // Database connection
  $conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Create session
  session_start();
?>
