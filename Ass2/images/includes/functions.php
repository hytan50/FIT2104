<?php
  function getProductDescription($name){
      global $conn;
      $query = "SELECT * FROM product_image WHERE name = ?";
      $pquery = $conn->prepare($query);
      $pquery->bind_param("s", $name);
      $pquery->execute();
      $result = $pquery->get_result();
      return $result->fetch_assoc();
  }