<?php
  require_once("../config.php");
  require_once("../functions.php");
  require_once("includes/functions.php");

  // Set context and include the header
  $pageTitle = "Product Images";
  $pageSection = "images";
  include_once("../includes/header.php");

  // Delete images if applicable
  $messages = bulkDeleteImages($_POST);

  // Render the table
  include_once("includes/list_table.php");
  $conn->close();

  include_once("../includes/footer.php");
?>
