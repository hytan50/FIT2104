<?php
  require_once("../config.php");


  /**
   * Get a client by ID
   */
  function getClient($id) {
    global $conn;
    $query = "SELECT * FROM client WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    $pquery->execute();
    $result = $pquery->get_result();
    return $result->fetch_assoc();
  }


  /**
   * Create a client and get its ID
   */
  function createClient($data) {
    global $conn;

    // Clean default for subscribe boolean
    $data["is_subscribed"] = $data["is_subscribed"] ?? 0;

    $query = "INSERT INTO client (
        first_name,
        last_name,
        address_street,
        address_suburb,
        address_state,
        address_postcode,
        email,
        phone,
        is_subscribed
      ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $pquery = $conn->prepare($query);
    $pquery->bind_param(
      "ssssssssi",
      $data["first_name"],
      $data["last_name"],
      $data["address_street"],
      $data["address_suburb"],
      $data["address_state"],
      $data["address_postcode"],
      $data["email"],
      $data["phone"],
      $data["is_subscribed"]
    );
    $pquery->execute();
    return $conn->insert_id;
  }


  /**
   * Update a client using values from an associative array
   */
  function updateClient($data) {
    global $conn;
    $query = "UPDATE client
      SET first_name = ?,
        last_name = ?,
        address_street = ?,
        address_suburb = ?,
        address_state = ?,
        address_postcode = ?,
        email = ?,
        phone = ?,
        is_subscribed = ?
      WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param(
      "ssssssssii",
      $data["first_name"],
      $data["last_name"],
      $data["address_street"],
      $data["address_suburb"],
      $data["address_state"],
      $data["address_postcode"],
      $data["email"],
      $data["phone"],
      $data["is_subscribed"],
      $data["id"]
    );
    return $pquery->execute();
  }


  /**
   * Delete a client by ID
   */
  function deleteClient($id) {
    global $conn;
    $query = "DELETE FROM client WHERE id = ?";
    $pquery = $conn->prepare($query);
    $pquery->bind_param("i", $id);
    return $pquery->execute();
  }

?>
