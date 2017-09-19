<?php
  require_once("../config.php");


  /**
   * Get a category by ID
   */
  function getCategory($id) {
    global $conn;
    $query = "SELECT * FROM category WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }


  /**
   * Create a category and get its ID
   */
  function createCategory($data) {
    global $conn;
    $query = "INSERT INTO category (name) VALUES(?)";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("s", $data["name"]);
    $pquery->execute();
    return $conn->insert_id;
  }


  /**
   * Update a category using values from an associative array
   */
  function updateCategory($data) {
    global $conn;
    $query = "UPDATE category SET name = ? WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("si", $data["name"], $data["id"]);
    return $pquery->execute();
  }


  /**
   * Delete a category by ID
   */
  function deleteCategory($id) {
    global $conn;
    $query = "DELETE FROM category WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    return $pquery->execute();
  }

?>
