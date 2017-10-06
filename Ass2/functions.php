<?php
  require_once("config.php");

  function auth_redirect() {
    if (!isset($_SESSION["username"])) {
      $_SESSION["destinationURL"] = $_SERVER["REQUEST_URI"];
      header("Location: ../");
    }
  }

  function authenticate($username, $password) {
    global $conn;
    $query = "SELECT * FROM admin WHERE username = ? AND password = SHA2(?, 0)";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("ss", $username, $password);
    $pquery->execute();
    $result = $pquery->get_result();

    if ($result->num_rows > 0)  {
      // Username and password combo exists
      $_SESSION["username"] = $username;
      $_SESSION["logged_in"] = true;
      return true;

    } else {
      // Invalid username or password
      return false;
    }
  }

  function logout(){
    if (isset($_SESSION["username"]) && isset($_SESSION["logged_in"])) {
      session_unset();
      session_destroy();
      return true;

    } else {
      echo "Unexpected error occurred. Session variables are unset";
      return false;
    }
  }

?>
