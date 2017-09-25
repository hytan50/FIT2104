<?php
  require_once("../config.php");
  require_once("includes/functions.php");

  // When a form has been submitted
  switch($_POST["action"]) {
    case "update":
      updateProduct($_POST);

      // Upload and link the product images to the product
      $images = $_FILES["images"];
      createProductImages($_POST["id"], $images);

      // Success! Redirect to list view.
      header("Location: .");
      break;

    case "confirm_delete":
      deleteProduct($_POST["id"]);

      // Success! Redirect to list view.
      header("Location: .");
      break;
  }

  // Set context and include the header, content and footer.
  $pageTitle = "Edit Product";
  $pageSection = "products";
  $product = getProduct($_GET["id"]);
  $product_images = getProductImages($_GET["id"]);
  $product_categories = getProductCategories($_GET["id"]);
  include_once("../includes/header.php");
  include_once("includes/edit_form.php");
  include_once("../includes/footer.php");
?>
