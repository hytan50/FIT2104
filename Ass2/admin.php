<?php
  require_once("config.php");

  // Handle login and logout attempts
  switch($_GET["action"]) {
    case "logout":
      // TODO: Logout functionality goes here.

      // Redirect back to login page.
      header("Location: admin.php");
      break;

    case "login":
      // TODO: Process login attempt here.
      break;
  }
?>

<p>TODO: Show login form here.</p>
