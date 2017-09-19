<?php
  require_once("../config.php");


  /**
   * Get a product by ID
   */
  function getProduct($id) {
    global $conn;
    $query = "SELECT * FROM product WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }


  /**
   * Create a product and get its ID
   */
  function createProduct($data) {
    global $conn;
    $query = "INSERT INTO product (
        name, cost_price, sale_price, country_of_origin
      ) VALUES (?, ?, ?, ?)";
    $pquery = $conn->prepare($query);
    $pquery->bind_param(
      "sdds",
      $data["name"],
      $data["cost_price"],
      $data["sale_price"],
      $data["country_of_origin"]
    );
    $pquery->execute();
    return $conn->insert_id;
  }


  /**
   * Update a product using values from an associative array
   */
  function updateProduct($data) {
    global $conn;

    // Delete product images
    if (isset($data["delete_image"])) {
      foreach ($data["delete_image"] as $key => $id) {
        deleteProductImage($id);
      }
    }

    // Update the product
    $query = "UPDATE product SET name = ?, cost_price = ?, sale_price = ?, country_of_origin = ? WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param(
      "sddsi",
      $data["name"],
      $data["cost_price"],
      $data["sale_price"],
      $data["country_of_origin"],
      $data["id"]
    );
    return $pquery->execute();
  }


  /**
   * Create and upload product images
   */
  function createProductImages($product_id, $images) {
    global $conn;
    $image_ids = array();

    foreach($images["tmp_name"] as $key=>$tmp_name){
      $temp = $_FILES["images"]["tmp_name"][$key];
      $name = $_FILES["images"]["name"][$key];

      if (empty($temp)) {
        break;
      }

      // Move to directory and save reference in DB
      move_uploaded_file($temp, SITE_ROOT."/product_images/".$name);
      $query = "INSERT INTO product_image (name, product_id) VALUES (?, ?)";
      $pquery = $conn->prepare($query);
      $pquery->bind_param('si', $name, $product_id);
      $pquery->execute();
      array_push($image_ids, $conn->insert_id);
    }
    return $image_ids;
  }


  /**
   * Get product images for a given product
   */
  function getProductImages($product_id) {
    global $conn;
    $query = "SELECT * FROM product_image WHERE product_id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $product_id);
    $pquery->execute();
    return $pquery->get_result();
  }


  /**
   * Delete product image by ID
   */
  function deleteProductImage($image_id) {
    global $conn;

    // Get the image name (i.e. location on disk)
    $query = "SELECT * FROM product_image WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $image_id);
    $pquery->execute();
    $result = $pquery->get_result();
    $name = $result->fetch_assoc()["name"];

    if (!$name) {
      die("Image #".$image_id." not found in DB.");
    }

    // Delete the file from disk
    unlink(SITE_ROOT."/product_images/".$name);

    // Delete the image from the database
    $query = "DELETE FROM product_image WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $image_id);
    return $pquery->execute();
  }
