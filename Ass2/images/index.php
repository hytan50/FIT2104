<?php
  require_once("../config.php");
  require_once("../functions.php");
  require_once("includes/functions.php");

  // Set context and include the header
  $pageTitle = "Product Images";
  $pageSection = "images";
  include_once("../includes/header.php");

  // Render the table
  $messages = bulkDeleteImages($_POST);
  include_once("includes/list_table.php");
  $conn->close();

  include_once("../includes/footer.php");
?>
