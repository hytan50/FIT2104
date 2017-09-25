<?php
  require_once("../products/includes/functions.php");


  /**
   * Delete product image by ID
   */
  function getImageByName($name){
    global $conn;
    $query = "SELECT
        product_image.id,
        product_image.name,
        product_image.product_id,
        product.name AS product_name
      FROM
        product_image
      INNER JOIN product ON product_image.product_id = product.id
      WHERE product_image.name = ?
      LIMIT 1";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("s", $name);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }


  /**
   * Delete product images by name in bulk
   */
  function bulkDeleteImages($data) {
    // Delete product images
    $messages = array();
    if (isset($data["delete_image"])) {
      foreach ($data["delete_image"] as $image_name) {
        $image_record = getImageByName($image_name);

        // Delete from directory
        try {
          unlink(SITE_ROOT."/product_images/".$image_name);
        } catch (Exception $e) {
          array_push($messages, "<div class=\"alert alert-danger\"><span>Error deleting <strong>".$image_name."</strong>: ".$e->getMessage()."</span></div>");
          continue;
        }

        // Delete from DB if applicable
        if ($image_record) {
          deleteProductImage($image_record["id"]);
          array_push($messages, "<div class=\"alert alert-success\"><span><strong>".$image_name."</strong> has been removed from <strong>". $image_record["product_name"]."</strong> and deleted.</span></div>");
        } else {
          array_push($messages, "<div class=\"alert alert-success\"><span><strong>".$image_name."</strong> was not used by any products and has been deleted.</span></div>");
        }

      }
    }
    return $messages;
  }

?>
