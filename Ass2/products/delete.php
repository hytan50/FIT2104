<?php
  require_once("includes/functions.php");

  if (isset($_GET["id"])) {
    deleteProduct($_GET["id"]);
  }

  // Redirect to list view.
  header("Location: .");
?>
