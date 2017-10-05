<?php
  require_once("../config.php");
  require_once("includes/functions.php");

  // Update prices if applicable
  $messages = bulkUpdateProductPrices($_POST);


  // Get a list of products
  $query = "SELECT * FROM product";
  $result = $conn->query($query);

  // Set context and include the header
  $pageTitle = "Product Prices";
  $pageSection = "product_prices";
  include_once("../includes/header.php");

  // List table
  include_once("includes/list_table.php");

  $result->free();
  $conn->close();
  include_once("../includes/footer.php");
?>
