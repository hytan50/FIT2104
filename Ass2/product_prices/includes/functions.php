<?php
  require_once("../products/includes/functions.php");


  /**
   * Update a product sale price by ID
   */
  function updateProductPrice($productId, $updatedPrice) {
    global $conn;
    $query = "UPDATE product SET sale_price = ? WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("di", $updatedPrice, $productId);
    return $pquery->execute();
  }


  /**
   * Update product sale prices by ID in bulk
   */
  function bulkUpdateProductPrices($data) {
    $messages = array();

    if(!empty($data["check"])) {
      $i = 0;
      foreach ($data["check"] as $product_id) {
        $i++;
        $updated_price = $data[$product_id];
        updateProductPrice($product_id, $updated_price);
      }
      array_push($messages, "<div class=\"alert alert-success\"><span><strong>".$i."</strong> price(s) have been updated.</span></div>");
    }

    return $messages;
  }

?>
