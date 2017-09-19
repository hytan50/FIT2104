<?php
  require_once("../config.php");
  require_once("includes/functions.php");

  if (isset($_POST["action"]) && $_POST["action"] == "add") {
    // Create the product and get its ID
    $product_id = createProduct($_POST);

    // Upload and link the product images to the product
    $images = $_FILES["images"];
    createProductImages($product_id, $images);

    // Success! Redirect to list view.
    header("Location: list.php");
  }

  // Set context and include the header, content and footer.
  $pageTitle = "Add Product";
  $pageSection = "products";
  $product_categories = getProductCategories(null);
  include_once("../includes/header.php");
  include_once("includes/add_form.php");
  include_once("../includes/footer.php");
?>
