<?php
  function getProductDescription($name){
    // TODO: Reuse product function
    global $conn;
    $query = "SELECT * FROM product_image WHERE name = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("s", $name);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }

  function getProduct($id){
    // TODO: Reuse product function
    global $conn;
    $query = "SELECT * FROM product WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }

  function deleteProductImage($name){
    // TODO: Reuse product function
    global $conn;
    $query = "DELETE FROM product_image WHERE name = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("s", $name);
    return $pquery->execute();
  }
