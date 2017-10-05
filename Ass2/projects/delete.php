<?php
  require_once("includes/functions.php");

  if (isset($_GET["id"])) {
    deleteProject($_GET["id"]);
  }

  // Redirect to list view.
  header("Location: .");
?>
