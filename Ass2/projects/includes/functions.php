<?php
  require_once("../config.php");


  /**
   * Get a project by ID
   */
  function getProject($id) {
    global $conn;
    $query = "SELECT * FROM project WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }


  /**
   * Create a project and get its ID
   */
  function createProject($data) {
    global $conn;
    $query = "INSERT INTO project (description, country, city) VALUES(?, ?, ?)";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("sss", $data["description"], $data["country"], $data["city"]);
    $pquery->execute();
    return $conn->insert_id;
  }


  /**
   * Update a project using values from an associative array
   */
  function updateProject($data) {
    global $conn;
    $query = "UPDATE project SET description = ?, country = ?, city = ? WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("sssi", $data["description"], $data["country"], $data["city"], $data["id"]);
    return $pquery->execute();
  }


  /**
   * Delete a project by ID
   */
  function deleteProject($id) {
    global $conn;
    $query = "DELETE FROM project WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    return $pquery->execute();
  }

?>
